function openTab(evt,tabName)
{
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");

    for(i=0;i<tabcontent.length;i++)
    {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");

    for(i=0;i<tablinks.length;i++)
    {
        tablinks[i].className = tablinks[i].className.replace(" active","");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";

}

function submitForm()
{
    var enteredName = document.getElementById("c4_form_input_name").value;
    //alert("name: "+var);
    document.getElementById("c4_form_preview_title").textContent = "Form Submission";
    document.getElementById("c4_form_preview_title").style = "border:1px solid black;";
    document.getElementById("c4_form_preview_name").textContent = enteredName;
    document.getElementById("c4_form_preview_email").textContent = enteredName.toLowerCase() + "@gmail.com";
}