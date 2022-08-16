/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/assets/js/admin.js ***!
  \**************************************/
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];
var submit = document.getElementsByClassName("submit")[0];
document.querySelectorAll(".editable").forEach(function (field) {
  field.addEventListener('click', function () {
    modal.querySelector('#id').append(field.dataset.id);
    modal.querySelector('#comment').value = field.innerText;

    var _iterator = _createForOfIteratorHelper(field.parentNode.children),
        _step;

    try {
      for (_iterator.s(); !(_step = _iterator.n()).done;) {
        var td = _step.value;
        var data = modal.querySelector('#' + td.dataset.title);

        if (data) {
          data.append(td.innerText);
        }
      }
    } catch (err) {
      _iterator.e(err);
    } finally {
      _iterator.f();
    }

    modal.style.display = "block";
  });
});
span.addEventListener('click', function () {
  closeModal(modal);
});

window.onclick = function (event) {
  if (event.target == modal) {
    closeModal(modal);
  }
};

submit.addEventListener('click', function () {
  console.log('clicked');
  var id = modal.querySelector('#id').innerHTML.replace(/(<b>.*<\/b>)(.*)/, "$2");
  var comment = modal.querySelector('#comment').value;
  var method = document.querySelector('[name="_method"]').value;
  var token = document.querySelector('[name="_token"]').value;
  var data = new FormData();
  data.append('id', id);
  data.append('comment', comment);
  data.append('_method', method);
  data.append('_token', token);
  var request = new XMLHttpRequest();
  request.open("POST", "/admin/store", true);
  request.send(data);

  request.onload = function () {
    closeModal(modal);
    document.querySelector('[data-id="' + id + '"]').innerText = request.responseText;
  };
});

function closeModal(modal) {
  modal.style.display = "none";
  modal.querySelectorAll('.modal-content .input').forEach(function (div) {
    div.innerHTML = div.innerHTML.replace(/(<b>.*<\/b>)(.*)/, "$1");
  });
}
/******/ })()
;