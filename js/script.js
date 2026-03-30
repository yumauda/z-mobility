jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $(".p-totop");
  topBtn.hide();

  // p-mvを過ぎたらヘッダーの見た目を切り替え
  (function () {
    var $header = $(".p-header");
    if (!$header.length) return;

    var updateHeaderClass = function () {
      $header.toggleClass("js-scroll-header", $(window).scrollTop() > 300);
    };

    $(window).on("scroll resize", updateHeaderClass);
    updateHeaderClass();
  })();

  // mvを過ぎたらバナーを表示（opacity/visibilityで切り替え）
  (function () {
    var $mv = $(".p-mv");
    var $banner = $(".p-mv__banner");
    if (!$mv.length || !$banner.length) return;

    var update = function () {
      if ($banner.hasClass("is-dismissed")) return;
      var mvBottom = ($mv.offset()?.top || 0) + ($mv.outerHeight() || 0);
      $banner.toggleClass("is-visible", $(window).scrollTop() >= mvBottom);
    };

    $(window).on("scroll resize", update);
    update();
  })();

  // バナーを閉じる
  $(document).on("click", ".p-mv__banner-button", function (e) {
    e.preventDefault();
    e.stopPropagation();
    var $banner = $(this).closest(".p-mv__banner");
    $banner.removeClass("is-visible").addClass("is-dismissed");
  });

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  /* $(document).on("click", 'a[href*="#"]', function () {
    let time = 400;
    let header = $("header").innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $("html,body").animate({ scrollTop: targetY }, time, "swing");
    return false;
  }); */
  $(function () {
    $(".p-tab__btn").on("click", function () {
      activateTab($(this));
    });
  });

  // 初期ロード時にURLパラメータをチェックし、該当するタブを開く
  const urlParams = new URLSearchParams(window.location.search);
  const tabParam = urlParams.get("tab");
  if (tabParam) {
    const targetTabButton = $(`#tabParam`);
    if (targetTabButton.length) {
      activateTab(targetTabButton);
    }
  }

  function activateTab(tabButton) {
    const tab_btn = $(".p-tab__btn");
    const tab_panel = $(".p-tab__panel");
    const tabID = "#" + tabButton.attr("aria-controls");

    tab_btn.attr("aria-selected", false).attr("aria-expanded", false);
    tabButton.attr("aria-selected", true).attr("aria-expanded", true);
    tab_panel.attr("aria-hidden", true);
    $(tabID).attr("aria-hidden", false);
  }
  $("#drawer a[href]").on("click", function (event) {
    $(".p-drawer-icon").trigger("click");
  });
});

document.addEventListener("DOMContentLoaded", () => {
  setUpAccordion();
});

const setUpAccordion = () => {
  const details = document.querySelectorAll(".js-details");
  const RUNNING_VALUE = "running"; // アニメーション実行中のときに付与する予定のカスタムデータ属性の値
  const IS_OPENED_CLASS = "is-opened"; // アイコン操作用のクラス名

  details.forEach((element) => {
    const summary = element.querySelector(".js-summary");
    const content = element.querySelector(".js-content");

    summary.addEventListener("click", (event) => {
      // デフォルトの挙動を無効化
      event.preventDefault();

      // 連打防止用。アニメーション中だったらクリックイベントを受け付けないでリターンする
      if (element.dataset.animStatus === RUNNING_VALUE) {
        return;
      }

      let icon = element.children[0];
      // detailsのopen属性を判定
      if (element.open) {
        // アコーディオンを閉じるときの処理
        // アイコン操作用クラスを切り替える(クラスを取り除く)
        element.classList.toggle(IS_OPENED_CLASS);
        // アニメーションを実行
        const closingAnim = content.animate(
          closingAnimKeyframes(content),
          animTiming
        );
        // アニメーション実行中用の値を付与
        element.dataset.animStatus = RUNNING_VALUE;

        icon.classList.toggle(IS_OPENED_CLASS);
        // アニメーションの完了後に
        closingAnim.onfinish = () => {
          // open属性を取り除く
          element.removeAttribute("open");
          // アニメーション実行中用の値を取り除く
          element.dataset.animStatus = "";
        };
      } else {
        // アコーディオンを開くときの処理
        // open属性を付与
        element.setAttribute("open", "true");

        // アイコン操作用クラスを切り替える(クラスを付与)
        element.classList.toggle(IS_OPENED_CLASS);
        // アニメーションを実行
        const openingAnim = content.animate(
          openingAnimKeyframes(content),
          animTiming
        );
        // アニメーション実行中用の値を入れる
        element.dataset.animStatus = RUNNING_VALUE;

        icon.classList.toggle(IS_OPENED_CLASS);
        // アニメーション完了後にアニメーション実行中用の値を取り除く
        openingAnim.onfinish = () => {
          element.dataset.animStatus = "";
        };
      }
    });
  });
};

/**
 * アニメーションの時間とイージング
 */
const animTiming = {
  duration: 400,
  easing: "ease-out",
};

/**
 * アコーディオンを閉じるときのキーフレーム
 */
const closingAnimKeyframes = (content) => [
  {
    height: content.offsetHeight + "px", // height: "auto"だとうまく計算されないため要素の高さを指定する
    opacity: 1,
  },
  {
    height: 0,
    opacity: 0,
  },
];

/**
 * アコーディオンを開くときのキーフレーム
 */
const openingAnimKeyframes = (content) => [
  {
    height: 0,
    opacity: 0,
  },
  {
    height: content.offsetHeight + "px",
    opacity: 1,
  },
];

window.onload = function () {
  document.body.classList.add("fade-in");
};

let scrollPosition = 0; // スクロール位置を記録する変数

jQuery(document).ready(function ($) {
  const isDrawerDesktop = function () {
    return window.matchMedia("(min-width: 768px)").matches;
  };

  const stopDrawerSubAnimation = function ($sub) {
    const currentAnimation = $sub.data("drawerAnimation");

    if (currentAnimation) {
      currentAnimation.cancel();
      $sub.removeData("drawerAnimation");
    }
  };

  const showDrawerSubInstant = function ($sub) {
    stopDrawerSubAnimation($sub);
    $sub.css({
      display: "flex",
      height: "auto",
      opacity: 1,
      marginTop: "",
      overflow: "visible",
    });
  };

  const hideDrawerSubInstant = function ($sub) {
    stopDrawerSubAnimation($sub);
    $sub.css({
      display: "none",
      height: 0,
      opacity: 0,
      marginTop: 0,
      overflow: "hidden",
    });
  };

  const animateDrawerSubOpen = function ($sub) {
    const subElement = $sub.get(0);
    if (!subElement) return;

    stopDrawerSubAnimation($sub);
    $sub.css({
      display: "flex",
      height: "auto",
      opacity: 1,
      marginTop: "",
      overflow: "hidden",
    });

    const endHeight = subElement.scrollHeight;
    const endMarginTop =
      parseFloat(window.getComputedStyle(subElement).marginTop) || 0;

    $sub.css({
      height: 0,
      opacity: 0,
      marginTop: 0,
    });

    const animation = subElement.animate(
      [
        {
          height: "0px",
          opacity: 0,
          marginTop: "0px",
        },
        {
          height: `${endHeight}px`,
          opacity: 1,
          marginTop: `${endMarginTop}px`,
        },
      ],
      {
        duration: 320,
        easing: "cubic-bezier(0.22, 1, 0.36, 1)",
        fill: "forwards",
      }
    );

    $sub.data("drawerAnimation", animation);

    animation.onfinish = function () {
      $sub.css({
        display: "flex",
        height: "auto",
        opacity: 1,
        marginTop: "",
        overflow: "visible",
      });
      $sub.removeData("drawerAnimation");
    };
  };

  const animateDrawerSubClose = function ($sub) {
    const subElement = $sub.get(0);
    if (!subElement) return;

    stopDrawerSubAnimation($sub);

    const startHeight = subElement.scrollHeight;
    const startMarginTop =
      parseFloat(window.getComputedStyle(subElement).marginTop) || 0;

    $sub.css({
      display: "flex",
      height: `${startHeight}px`,
      opacity: 1,
      marginTop: `${startMarginTop}px`,
      overflow: "hidden",
    });

    const animation = subElement.animate(
      [
        {
          height: `${startHeight}px`,
          opacity: 1,
          marginTop: `${startMarginTop}px`,
        },
        {
          height: "0px",
          opacity: 0,
          marginTop: "0px",
        },
      ],
      {
        duration: 280,
        easing: "cubic-bezier(0.22, 1, 0.36, 1)",
        fill: "forwards",
      }
    );

    $sub.data("drawerAnimation", animation);

    animation.onfinish = function () {
      $sub.css({
        display: "none",
        height: 0,
        opacity: 0,
        marginTop: 0,
        overflow: "hidden",
      });
      $sub.removeData("drawerAnimation");
    };
  };

  const setDrawerSectionState = function ($item, shouldOpen, options = {}) {
    const $toggle = $item.find(".p-drawer-content__toggle").first();
    const $sub = $item.find(".p-drawer-content__sub").first();
    const shouldAnimate = options.animate === true;

    $item.toggleClass("is-open", shouldOpen);
    $toggle.attr("aria-expanded", shouldOpen ? "true" : "false");

    if (!$sub.length) {
      return;
    }

    if (isDrawerDesktop()) {
      stopDrawerSubAnimation($sub);
      $sub.removeAttr("style");
      return;
    }

    if (!shouldAnimate) {
      if (shouldOpen) {
        showDrawerSubInstant($sub);
      } else {
        hideDrawerSubInstant($sub);
      }
      return;
    }

    if (shouldOpen) {
      animateDrawerSubOpen($sub);
    } else {
      animateDrawerSubClose($sub);
    }
  };

  const resetDrawerSections = function () {
    $(".p-drawer-content__list--has-sub").each(function () {
      const shouldOpen = $(this).data("default-open") === true;
      setDrawerSectionState($(this), shouldOpen);
    });
  };

  const syncDrawerSectionsForViewport = function () {
    $(".p-drawer-content__list--has-sub").each(function () {
      const $item = $(this);
      const shouldOpen = $item.hasClass("is-open");

      setDrawerSectionState($item, shouldOpen);
    });
  };

  $(".p-drawer-icon").on("click", function (e) {
    e.preventDefault();

    const isOpening = !$(".p-drawer-content").hasClass("is-active");

    $(".p-drawer-icon").toggleClass("is-active");
    $(".p-drawer-content").toggleClass("is-active");
    $(".p-drawer-background").toggleClass("is-active");
    $("body").toggleClass("drawer-open");

    if (isOpening) {
      resetDrawerSections();
    }

    return false;
  });

  $(document).on("click", ".p-drawer-content__toggle", function (e) {
    if (isDrawerDesktop()) {
      return;
    }

    e.preventDefault();
    e.stopPropagation();

    const $item = $(this).closest(".p-drawer-content__list--has-sub");
    const shouldOpen = !$item.hasClass("is-open");

    setDrawerSectionState($item, shouldOpen, { animate: true });
  });

  $(".p-drawer-icon, .p-drawer-icon--barge").on("click", function () {
    if (!$(this).hasClass("p-drawer-icon")) {
      $("body").toggleClass("drawer-open");
    }
  });

  $(window).on("resize", syncDrawerSectionsForViewport);
  syncDrawerSectionsForViewport();
});


