# Bootstrap-4-Site-Files
 These files are to be used as starter files for Coding 2 students for HTML and CSS review assignment.
<!-- Cards --> 


             <div class="grid"> 

                <div class="grid-item"> 

                <div class="card-size"> 

                        <img class="card-img" src="./img/spiderman.jpeg" alt="Spriderman"> 

                        <div class="card-content"> 

                            <h1 class="card-header">Spider-Man: Miles Morales</h1> 

                            <p class="card-text">spiderman</p> 

                            <button class="card-btn">Visit<span>&rarr;</span></button> 

                        </div> 

                    </div> 

                </div> 

                <div class="grid-item"> 

                <div class="card-size"> 

                        <img class="card-img" src="./img/coldwar.jpeg" alt="Call of Duty"> 

                    <div class="card-content"> 

                            <h1 class="card-header">Call of Duty: Cold War</h1> 

                            <p class="card-text">Call of duty Cold war</p> 

                            <button class="card-btn">Visit<span>&rarr;</span></button> 

                        </div> 

                    </div> 

                </div> 

                <div class="grid-item"> 

                <div class="card-size"> 

                        <img class="card-img" src="./img/madden.jpeg" alt="Madden"> 

                        <div class="card-content"> 

                            <h1 class="card-header">Madden 21</h1> 
<!-- Cards --> 


             <div class="grid"> 

                <div class="grid-item"> 

                <div class="card-size"> 

                        <img class="card-img" src="./img/spiderman.jpeg" alt="Spriderman"> 

                        <div class="card-content"> 

                            <h1 class="card-header">Spider-Man: Miles Morales</h1> 

                            <p class="card-text">spiderman</p> 

                            <button class="card-btn">Visit<span>&rarr;</span></button> 

                        </div> 

                    </div> 

                </div> 

                <div class="grid-item"> 

                <div class="card-size"> 

                        <img class="card-img" src="./img/coldwar.jpeg" alt="Call of Duty"> 

                    <div class="card-content"> 

                            <h1 class="card-header">Call of Duty: Cold War</h1> 

                            <p class="card-text">Call of duty Cold war</p> 

                            <button class="card-btn">Visit<span>&rarr;</span></button> 

                        </div> 

                    </div> 

                </div> 

                <div class="grid-item"> 

                <div class="card-size"> 

                        <img class="card-img" src="./img/madden.jpeg" alt="Madden"> 

                        <div class="card-content"> 

                            <h1 class="card-header">Madden 21</h1> 

                            <p class="card-text"> Madden 21</p> 

                            <button class="card-btn">Visit<span>&rarr;</span></button> 

                        </div> 

                    </div> 

                </div> 

            </div> 


            .grid{ 

        display: grid; 

        width: 114em; 

        grid-gap: 6rem; 

        grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr)); 

        align-items: start; 

 } 

    .grid-item{ 

        background-color: #fff; 

        border-radius: 0.4rem; 

        overflow: hidden; 

        box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.1); 

        cursor: pointer; 

        transition: 0.2s; 

    } 

    .grid-item:hover{ 

        transform: translateY(-0.5%); 

        box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.5); 

    } 
                            <p class="card-text"> Madden 21</p> 

                            <button class="card-btn">Visit<span>&rarr;</span></button> 

                        </div> 

                    </div> 

                </div> 

            </div> 


            .grid{ 

        display: grid; 

        width: 114em; 

        grid-gap: 6rem; 

        grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr)); 

        align-items: start; 

 } 

    .grid-item{ 

        background-color: #fff; 

        border-radius: 0.4rem; 

        overflow: hidden; 

        box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.1); 

        cursor: pointer; 

        transition: 0.2s; 

    } 

    .grid-item:hover{ 

        transform: translateY(-0.5%); 

        box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.5); 

    } 

 



 style
 

    .card-img{ 

        display: block; 

        width: 10%; 

        height: 10rem; 

        object-fit: cover; 

    } 

    .card-content{ 

        padding: 1rem; 

    } 

    .card-header{ 

        font-size: 1rem; 

        font-weight: 50; 

        color: #0d0d0d; 

        margin-bottom: 1.5rem; 

    } 

    .card-text{ 

        font-size: 1rem; 

        letter-spacing: 0.1rem; 

        line-height: 1.7; 

        color: #3d3d3d; 

        margin-bottom: 2.5rem; 

    } 

    .card-btn{ 

        display: block; 

        width: 50%; 

        padding: 1.5rem; 

        font-size: 1rem; 

        text-align: center; 

        color: #3363ff; 

        background-color: #d8e0fd; 

        border: none; 

        border-radius: 0.4rem; 

        transition: 0.2s; 

        cursor: pointer; 

        letter-spacing: 0.1rem; 

    } 

    .card-btn span{ 

        margin-left: 1rem; 

        transition: 0.2s; 

    } 

    .card-btn:hover, .card-btn:active{ 

        background-color: #c2cffc; 

    } 

    .card-btn:hover span, .card-btn:active span{ 

        margin-left: 1.5rem; 

    } 

     

    @media only screen and (max-width: 60em){ 

        body{ 

            padding: 1rem; 

        } 

        .grid{ 

            grid-gap: 3rem; 

        } 

    } 

@media screen and (max-width: 60em){ 

        body{ 

            padding: 3rem; 

        } 

        .grid{ 

            grid-gap: 3rem; 

        } 