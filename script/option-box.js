$(document).ready(function(){
    $(".option-box1").click(function(){
        var page = $(this).data("page");

        // Load content dynamically
        $("#main-content").load("./content/" + page);

        // Update breadcrumbs
        $("#breadcrumb").html(`
            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link" data-page="academics.php">Academics</a></li>
        `);
    });
});