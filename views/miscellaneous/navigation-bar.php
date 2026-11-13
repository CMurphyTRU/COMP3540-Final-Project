<!DOCTYPE html>
<html>
    <div class="glass-edge">
        <nav>
            <div class="inner-navigation-box">
                <ul class="navigation-list">
                    <li>
                        <a href="" class="retro-button">
                            <span class="button-icon">
                                <img src="../../public/images/dpad-button.svg" class="navigation-dpad" alt="D-pad">
                            </span>
                            <span class="button-label">Webpage 1</span>
                        </a>
                    </li>

                    <li>
                        <a href="" class="retro-button">
                            <span class="button-icon">
                                <div class="white-button-border">
                                    <span class="button-icon-circle" id="button1"></span>
                                </div>
                            </span>
                            <span class="button-label">Webpage 2</span>
                        </a>
                    </li>

                    <li>
                        <div class="navigation-pill-track">
                            <div class="navigation-pill-group">
                                <a href="" class="navigation-pill">Webpage 3</a>
                                <a href="" class="navigation-pill">Webpage 4</a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <a href="" class="retro-button">
                            <span class="button-icon">
                                <div class="white-button-border">
                                    <span class="button-icon-circle" id="button2"></span>
                                </div>
                            </span>
                            <span class="button-label">Webpage 5</span>
                        </a>
                    </li>

                    <li>
                        <a href="" class="retro-button">
                            <span class="button-icon">
                                <div class="white-button-border">
                                    <span class="button-shape-shadow">
                                        <span class="button-icon-circle" id="button3"></span>
                                    </span>
                                </div>
                            </span>
                            <span class="button-label">Webpage 6</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <style>
        
        /*.glass-edge */
        /*{
            /* From https://css.glass */
            /*background: rgba(255, 255, 255, 0);
            border-radius: 0 0 16px 16px;

            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);

            backdrop-filter: blur(13.6px);
            -webkit-backdrop-filter: blur(13.6px);

            width: 100%;
            box-sizing: border-box;
            height: fit-content;

            padding-bottom: 8px;

            display: flex;
            justify-content: center;
            align-items: center;
        } */

            .glass-edge {
                position: fixed;
                top: 0;
                left: 0;
                
                z-index: 2;

                background: #F2F3AE;
                border-bottom: 5px solid #A44200;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);

                border-radius: 0 0 32px 32px;

                

                backdrop-filter: blur(13.6px);
                -webkit-backdrop-filter: blur(13.6px);

                width: 100%;
                box-sizing: border-box;
                height: fit-content;

                padding-bottom: 8px;

                display: flex;
                justify-content: center;
                align-items: center;

                pointer-events: none;
            }

        body
        {
            margin: 0;
        }

        nav
        {
            background-color: #A44200;

            width: fit-content;

            display: flex;
            justify-content: center;
            align-items: center;

            margin: 10px 0 0;

            padding: 10px 16px;

            border-radius: 30px;
        }

        .inner-navigation-box
        {
            position: relative;
            background-color: #3C1518;
            width: fit-content;
            border-radius: 30px;
            padding: 8px 20px;

            /*horizontal offset, vertical offset, blur radius, shadow color*/
            box-shadow: 0 5px 6px rgba(0, 0, 0, 0.35);
        }

        .inner-navigation-box::before
        {
            content: "";

            position: absolute;
            left: 50%;
            bottom: 100%;

            width: 9px;
            height: 100vh;

            transform: translateX(-50%);

            /*https://www.w3schools.com/cssref/func_linear-gradient.php*/
            background: linear-gradient(to right,#050505,#292929,#080808);

            border-radius: 8px;

            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
        }

        .navigation-list
        {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;

            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .navigation-pill-track
        {
            position: relative;

            width: max-content;
            height: 70px;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navigation-pill-track::before
        {
            content: "";

            position: absolute;
            top: -8px;

            width: 100%;
            height: 8px;

            background-color: #D58936;

            border-radius: 0 0 8px 8px;
        }

        .navigation-pill-track::after
        {
            content: "";

            position: absolute;
            bottom: -29px;

            width: 100%;
            height: 20px;

            background-color: #D58936;

            border-radius: 8px 8px 0 0;
        }

        .navigation-pill-group
        {
            display: flex;
            align-items: center;
            gap: 8px;

            background-color: #F2F3AE;
            padding: 6px;
            border-radius: 16px;

            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.4);
        }

        .navigation-pill
        {
            display: flex;
            align-items: center;
            justify-content: center;

            min-width: 100px;
            height: 38px;
            padding: 0 18px;

            background-color: #3C1518;
            color: #F2F3AE;

            border-radius: 12px;

            font-family: Georgia, serif;
            font-size: 13px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;

            box-shadow: 0 3px 0 #261012, 0 5px 7px rgba(0, 0, 0, 0.35);

            transition: transform 0.2s ease, box-shadow 0.2s ease, text-shadow 0.3s ease;
        }

        .navigation-pill:hover
        {
            transform: translateY(-2px);

            text-shadow:0 0 3px #F2F3AE, 0 0 8px rgba(242, 243, 174, 0.8), 0 0 15px rgba(242, 243, 174, 0.5);

            /* Horizontal offset, vertical offset, blur radius, color. */
            box-shadow: 0 5px 0 #261012, 0 7px 10px rgba(0, 0, 0, 0.4);
        }

        .navigation-pill:active
        {
            transform: translateY(3px);

            box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.65), inset 0 -2px 3px rgba(242, 243, 174, 0.12);
        }

        .retro-button
        {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
            text-decoration: none;
        }

        .button-icon
        {
            width: 70px;
            height: 70px;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button-icon-circle
        {
            display: block;

            width: 30px;
            height: 30px;

            cursor: pointer;

            /*inset shadows: horizontal offset, vertical offset, blur radius, color*/
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.55), inset 0 -1px 2px rgba(242, 243, 174, 0.15);
        }

        #button1
        {
            background-color: #69140E;

            border-radius: 50%;
        }

        #button2
        {
            background-color: #A44200;

            border-radius: 4px;
        }

        .button-shape-shadow
        {
            display: block;

            width: 30px;
            height: 30px;

            filter: drop-shadow(0 2px 2px rgba(0, 0, 0, 0.6));
        }

        #button3
        {
            background-color: #D58936;

            /* this clip path was created using ai, I wanted the last button to be a tringle and I could not figure it out, I could make a image like I did for the plus button but I wanted to see if I could use css instead */
            clip-path: path("M 15 1 C 16.5 1 17.5 2 18.2 3.5 L 28.5 24 C 30 27 28 29 25 29 H 5 C 2 29 0 27 1.5 24 L 11.8 3.5 C 12.5 2 13.5 1 15 1 Z");

            box-shadow: none;
        }

        .white-button-border
        {
            width: 45px;
            height: 45px;

            display: flex;
            justify-content: center;
            align-items: center;

            background-color: #F2F3AE;
            border-radius: 8px;

            /*shadows: horizontal offset, vertical offset, blur radius, color*/
            box-shadow: 0 4px 0 #261012, 0 9px 12px rgba(0, 0, 0, 0.55);

            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .navigation-dpad
        {
            width: 70px;
            height: 70px;

            display: block;

            /*horizontal offset, vertical offset, blur radius, shadow color*/
            filter: drop-shadow(0 5px 5px rgba(0, 0, 0, 0.6));

            transition: transform 0.15s ease, filter 0.15s ease;
        }

       .button-label
        {
            text-align: center;

            color: #2B1012;

            font-family: Georgia, serif;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;

            /*horizontal offset, vertical offset, blur radius, shadow color*/
            text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.8), 0 1px 1px rgba(242, 243, 174, 0.12);

            transition: color 0.3s ease, text-shadow 0.3s ease;
        }   

        .retro-button:hover .button-label
        {
            color: #F2F3AE;

            /*horizontal offset, vertical offset, blur radius, color*/
            text-shadow: 0 0 3px #F2F3AE, 0 0 8px rgba(242, 243, 174, 0.8), 0 0 15px rgba(242, 243, 174, 0.5);
        }

        .retro-button:focus-visible .button-label
        {
            color: #F2F3AE;
            text-shadow: 0 0 3px #F2F3AE, 0 0 8px rgba(242, 243, 174, 0.8);
        }

        .retro-button:hover .white-button-border
        {
            transform: translateY(-2px);

            box-shadow: 0 5px 0 #261012, 0 7px 10px rgba(0, 0, 0, 0.4);
        }

        .retro-button:hover .navigation-dpad
        {
            transform: translateY(-2px);

            filter: drop-shadow(0 7px 7px rgba(0, 0, 0, 0.65));
        }

        .retro-button:active .white-button-border, .retro-button:active .navigation-dpad
        {
            transform: translateY(3px);
        }
    </style>
</html>