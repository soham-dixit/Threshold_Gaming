$.fn.progressBar = function () {
  var options =
    arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

  options = {
    throttleTime: options.throttleLimit || 100,
    debounceTime: options.debounceTime || 200,
    progressBarHeight: options.progressBarHeight || 10,
    progressBarColor: options.progressBarColor || "#F1F1F1",
    progressBarValueColor: options.progressBarValueColor || "#A1A1A1",
    progressBarTopPosition: options.progressBarTopPosition || 500,
  };
  var article = $(this)[0],
    windowHeight = window.innerHeight,
    articleHeight = article.clientHeight,
    maxProgressValue =
      articleHeight > windowHeight ? articleHeight - windowHeight : 0,
    progressBar = document.createElement("div"),
    progressBarValue = document.createElement("div");

  progressBar.value = 20;
  progressBar.max = maxProgressValue;
  progressBar.style.height = options.progressBarHeight + "px";
  progressBar.style.backgroundColor = options.progressBarColor;
  progressBar.style.position = "fixed";
  progressBar.style.width = "100%";
  progressBar.style.top = options.progressBarTopPosition + "px";
  progressBar.style.left = 0;
  progressBarValue.style.position = "absolute";
  progressBarValue.style.width = "0";
  progressBarValue.style.height = "100%";
  progressBarValue.style.backgroundColor = options.progressBarValueColor;
  progressBarValue.style.transition = "width 0.3s linear";
  article.appendChild(progressBar);
  progressBar.appendChild(progressBarValue);

  function calculateProgressBarWidth() {
    progressBarValue.style.width =
      (window.scrollY / maxProgressValue) * 100 + "%";
  }

  function throttle(callback, throttleLimit) {
    var wait = false;

    return function () {
      if (!wait) {
        callback();
        wait = true;
        setTimeout(function () {
          wait = false;
        }, throttleLimit);
      }
    };
  }

  function debounce(callback, debounceTime) {
    var timeout;
    return function () {
      var context = this,
        args = arguments;
      clearTimeout(timeout);
      timeout = setTimeout(function () {
        callback.apply(context, args);
      }, debounceTime);
    };
  }

  document.addEventListener(
    "scroll",
    throttle(calculateProgressBarWidth, options.throttleLimit)
  );
  document.addEventListener(
    "scroll",
    debounce(calculateProgressBarWidth, options.debounceTime)
  );
};

$("article").progressBar();
