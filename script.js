const form = document.querySelector("form"),
fileInput = document.querySelector(".file-input"),
progressArea = document.querySelector(".progress-area"),
uploadedArea = document.querySelector(".uploaded-area");

form.addEventListener("click", () =>{
  fileInput.click();
});

fileInput.onchange = ({target})=>{
  let file = target.files[0];
  if(file){
    let fileName = file.name;
    if(fileName.length >= 12){
      let splitName = fileName.split('.');
      fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
    }
    uploadFile(fileName);
  }
}

function uploadFile(name){
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/upload.php");
  xhr.upload.addEventListener("progress", ({loaded, total}) =>{
    let fileLoaded = Math.floor((loaded / total) * 100);
    let fileTotal = Math.floor(total / 1000);
    let fileSize;
    (fileTotal < 1024) ? fileSize = fileTotal + " KB" : fileSize = (loaded / (1024*1024)).toFixed(2) + " MB";
    let progressHTML = `<li class="row">
                          <i class="fas fa-file-alt"></i>
                          <div class="content">
                            <div class="details">
                              <span class="name">${name} • Uploading</span>
                              <span class="percent">${fileLoaded}%</span>
                            </div>
                            <div class="progress-bar">
                              <div class="progress" style="width: ${fileLoaded}%"></div>
                            </div>
                          </div>
                        </li>`;
    uploadedArea.classList.add("onprogress");
    progressArea.innerHTML = progressHTML;
    if(loaded == total){
      progressArea.innerHTML = "";
      let uploadedHTML = `<li class="row">
                            <div class="content upload">
                              <i class="fas fa-file-alt"></i>
                              <div class="details">
                                <span class="name">${name} • Uploaded</span>
                                <span class="size">${fileSize}</span>
                              </div>
                            </div>
                            <i class="fas fa-check"></i>
                          </li>`;
      uploadedArea.classList.remove("onprogress");
      uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
    }
  });
  let data = new FormData(form);
  xhr.send(data);
}



// var ALERT_TITLE = "Oops!";
// var ALERT_BUTTON_TEXT = "Ok";

// if(document.getElementById) {
//     window.alert = function(txt) {
//         createCustomAlert(txt);
//     }
// }

// function createCustomAlert(txt) {
//     d = document;

//     if(d.getElementById("modalContainer")) return;

//     mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
//     mObj.id = "modalContainer";
//     mObj.style.height = d.documentElement.scrollHeight + "px";

//     alertObj = mObj.appendChild(d.createElement("div"));
//     alertObj.id = "alertBox";
//     if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
//     alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
//     alertObj.style.visiblity="visible";

//     h1 = alertObj.appendChild(d.createElement("h1"));
//     h1.appendChild(d.createTextNode(ALERT_TITLE));

//     msg = alertObj.appendChild(d.createElement("p"));
//     //msg.appendChild(d.createTextNode(txt));
//     msg.innerHTML = txt;

//     btn = alertObj.appendChild(d.createElement("a"));
//     btn.id = "closeBtn";
//     btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
//     btn.href = "#";
//     btn.focus();
//     btn.onclick = function() { removeCustomAlert();return false; }

//     alertObj.style.display = "block";

// }


// alert('Enter username');

// function removeCustomAlert() {
//     document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
// }