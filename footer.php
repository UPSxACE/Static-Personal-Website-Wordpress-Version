</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.js"></script>
<script>
    var exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var card = event.relatedTarget
        // Extract info from data-bs-* attributes
        var title = card.getAttribute('data-bs-title')
        var image = card.getAttribute('data-bs-picture')
        var link = card.getAttribute('data-bs-project-link')

        BoldProjectName = document.createElement('strong')
        BoldProjectName.appendChild(document.createTextNode("Project Name: "))
        var projectName = card.getAttribute('data-bs-project-name')
        textNodeNormalProjectName = document.createTextNode(projectName)

        BoldProjectLanguage = document.createElement('strong')
        BoldProjectLanguage.appendChild(document.createTextNode("Project Language: "))
        var projectLanguage = card.getAttribute('data-bs-project-language')
        textNodeNormalProjectLanguage = document.createTextNode(projectLanguage)

        BoldProjectTech = document.createElement('strong')
        BoldProjectTech.appendChild(document.createTextNode("Technologies Used: "))
        var projectTech = card.getAttribute('data-bs-project-tech')
        textNodeNormalProjectTech = document.createTextNode(projectTech)

        BoldProjectStatus = document.createElement('strong')
        BoldProjectStatus.appendChild(document.createTextNode("Status: "))
        var projectStatus = card.getAttribute('data-bs-project-status')
        textNodeNormalProjectStatus = document.createTextNode(projectStatus)

        /*BoldProjectGoal = document.createElement('strong')
        BoldProjectGoal.appendChild(document.createTextNode("Goal: "))*/
        var projectDescription = card.getAttribute('data-bs-project-description')
        textNodeNormalProjectDescription = document.createTextNode(projectDescription)

        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var modalTitle = exampleModal.querySelector('.modal-title')
        var modalPicture = exampleModal.querySelector('#exampleModal img')
        var modalProjectName = exampleModal.querySelector('.project-name')
        var modalProjectLanguage = exampleModal.querySelector('.project-language')
        var modalProjectTech = exampleModal.querySelector('.project-tech')
        var modalProjectStatus = exampleModal.querySelector('.project-status')
        var modalProjectDescription = exampleModal.querySelector('.project-description')
        var modalProjectLink = exampleModal.querySelector('#modalLink')




        modalTitle.textContent = title
        modalPicture.setAttribute("src", image)

        modalProjectName.textContent = ""
        modalProjectName.appendChild(BoldProjectName)
        modalProjectName.appendChild(textNodeNormalProjectName)

        modalProjectLanguage.textContent = ""
        modalProjectLanguage.appendChild(BoldProjectLanguage)
        modalProjectLanguage.appendChild(textNodeNormalProjectLanguage)

        modalProjectTech.textContent = ""
        modalProjectTech.appendChild(BoldProjectTech)
        modalProjectTech.appendChild(textNodeNormalProjectTech)

        modalProjectStatus.textContent = ""
        modalProjectStatus.appendChild(BoldProjectStatus)
        modalProjectStatus.appendChild(textNodeNormalProjectStatus)

        modalProjectDescription.textContent = ""
        //modalProjectGoal.appendChild(BoldProjectGoal)
        modalProjectDescription.appendChild(textNodeNormalProjectDescription)

        modalProjectLink.setAttribute('href', link)

    })
</script>
<?php wp_footer();?>
</body>

</html>