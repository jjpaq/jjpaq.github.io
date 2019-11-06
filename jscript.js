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

function captureTabs()
{
    var textareas = document.getElementsByTagName('textarea');
    var count = textareas.length;
    for(var i=0;i<count;i++)
    {
        textareas[i].onkeydown = function(e)
        {
            if(e.keyCode==9 || e.which==9)
            {
                e.preventDefault();
                var s = this.selectionStart;
                this.value = this.value.substring(0,this.selectionStart) + "\t" + this.value.substring(this.selectionEnd);
                this.selectionEnd = s+1; 
            }
        }
    }
}