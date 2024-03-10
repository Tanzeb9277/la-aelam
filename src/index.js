import 'nice-forms.css'

const file = document.getElementById("file-upload")
const filePreview = document.getElementById("file-preview")


file.addEventListener("change", (e) =>{
    const [file] = e.target.files
        if (file) {
            filePreview.src = URL.createObjectURL(file);
            let height = img.offsetHeight;

        }
})