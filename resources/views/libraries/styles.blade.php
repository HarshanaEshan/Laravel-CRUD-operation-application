<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    .flex-center{
        justify-content: center;
        align-items: center;
    }
    a{
        text-decoration: none;
    }
    .img-card{
        width: 10rem;
        height: 10rem;
    }
    /* .display-grid{
        display: grid;
        gap: 1rem;
    } */
    /* ************************************* */


    .container-home{
        /* display: grid; */
        margin-top: 7vh;
        gap: 10vh;
        /* background: blue; */
        /* width: max-content; */
    }
    .card{
        border: 2px solid blue;
        box-shadow: 2px 3px 4px;
    }
    .card:hover{
        border: 2px solid green;
        transform: scale(1.05);
        box-shadow: none;
    }
    .card-title, .card-text{
        display: flex;
        justify-content: center;
    }




    @yield('css');
</style>

@stack('css')
