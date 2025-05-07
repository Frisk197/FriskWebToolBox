function createToast(title=null, body, alertLevel){
    let toastDiv = document.createElement("div");
    toastDiv.classList.add("toast")
    toastDiv.classList.add("show")
    if(alertLevel === 0 && title===null){
        title = "Info"
    }
    if(alertLevel === 1){
        toastDiv.classList.add("text-white", "bg-success")
        if(title===null){
            title = "Success"
        }
    }
    if(alertLevel === 2){
        toastDiv.classList.add("bg-warning")
        if(title===null){
            title = "Warning"
        }
    }
    if(alertLevel === 3){
        toastDiv.classList.add("text-white", "bg-danger")
        if(title===null){
            title = "Error"
        }
    }

    toastDiv.role = "alert"
    toastDiv.ariaLive = "assertive"
    toastDiv.ariaAtomic = "true"

    let toastHeader = document.createElement("div")
    toastHeader.classList.add("toast-header")
    let toastTitle = document.createElement("strong")
    toastTitle.classList.add("me-auto")
    toastTitle.innerText = title
    let dismissBtn = document.createElement("button")
    dismissBtn.type = "button"
    dismissBtn.classList.add("btn-close")
    dismissBtn.setAttribute("data-bs-dismiss", "toast")
    dismissBtn.ariaLabel = "Close"
    dismissBtn.onclick = function (){
        toastDiv.classList.remove("show")
        toastDiv.classList.add("hide")
    }
    toastHeader.append(toastTitle, dismissBtn)

    let toastBody = document.createElement("div")
    toastBody.classList.add("toast-body")
    toastBody.innerText = body

    toastDiv.append(toastHeader, toastBody)

    setTimeout(function () {
        toastDiv.classList.remove("show")
        toastDiv.classList.add("hide")
    }, 10000)

    document.getElementById("toastContainer").append(toastDiv)
}