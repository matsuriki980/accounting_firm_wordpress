export function initTopVoiceSlider() {
  const slider = document.querySelector(".js-top-voice-slider");

  if (!slider) return;

  const mySplide = new Splide(slider, {
    arrows: false, // 矢印非表示
    pagination: false, // ページネーション非表示
    perMove: 1, // 1度で何枚のスライドを移動するか指定
    fixedWidth: "340rem",
    mediaQuery: "min", // モバイルファーストでメディアクエリを判定する設定

    breakpoints: {
      900: {
        fixedWidth: "420rem",
        padding: { right: "510rem" },
      },
    },
  });


  mySplide.mount();

  // 2. 自作ボタンを取得
  const prevBtn = document.querySelector(".js-top-voice__btn-back");
  const nextBtn = document.querySelector(".js-top-voice__btn-next");

  // 3. クリック時に go() を実行
  prevBtn.addEventListener("click", () => {
    mySplide.go("<"); // 1つ前へ
  });

  nextBtn.addEventListener("click", () => {
    mySplide.go(">"); // 1つ次へ
  });
}
