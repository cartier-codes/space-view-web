what is space-view?
space view will be a space themed app based around the planets, famous stars, the history of astronomy, and nasa, and the science behind space, space news etc etc

<b>Sections:</b>
-The planets:
    -How I imagine it is as a ticket system, you put your ticket in the ticket machine, you then go off to that planet and learn some fun facts about the planet, history of how the planet was discovered

    Method:
        -Add button for the tickets,
        -Once pressed, a sort of form comes up, i.e to and from times in light years etc.
        -Once submitted you will have a ticket, which will have a button to go somehwere.

        -Once pressed, the ticket goes in the machine using the perspective property, a video with a loading animation comes up and then you arrive at the planet, with it spinning in the background. Then a couple seconds later, a sidebar pops from the right with the facts of the planet.  I imagine the facts having a typing animation.
            sidebar code:
                ```
                .sidebar {
                        flex: 0 0 200px;
                        flex-direction: column;
                        backdrop-filter: blur(30px) saturate(2);
                        -webkit-backdrop-filter: blur(30px) saturate(2);
                        padding-inline: 0;
                        padding-block: 13px;
                        overflow-y: auto;
                        overflow-x: hidden;
                        transition: 2.2s cubic-bezier(.36,-0.01,0,.77);
                        height: 100%;

                    }

                .sidebar-closed{
                    margin-right: 200px;

                }
                ```
-The famous stars:
    -