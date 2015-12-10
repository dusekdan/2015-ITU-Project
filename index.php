<html>
<head>
    <title></title>
    <link rel="stylesheet" href="styles.css" type="text/css"    >
    <meta charset="utf-8">
</head>
<body>

<!-- multistep form -->
<form id="msform">
    <!-- progressbar -->
    <ul id="progressbar" class="first_step">
        <li class="active">1. krok</li>
        <li>2. krok</li>
        <li>3. krok</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">Zadejte prosím...</h2>
        <div class="block">
            <input type="text" name="age" placeholder="Váš věk">
        </div>
        <div class="block range">
            <div class="range">Vaši počítačovou znalost:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div><small>začátečník</small><input class="block" type="range" name="range"  placeholder="ĂšroveĹ� poÄŤĂ­taÄŤovĂ© dovednosti"><small>expert</small>
        </div>
        <div class="block radio">
            Vaše pohlaví:&nbsp;&nbsp;&nbsp;&nbsp; <label for="female">Žena </label><input type="radio" name="gender" value="female">
            <label for="male"> &nbsp;&nbsp; Muž </label><input class="block" type="radio" name="gender" value="male">
        </div>
        <input type="button" name="next" class="next1 action-button" value="A jdeme testovat..." />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Zvolte úroveň, kterou byste rádi vyzkoušeli...</h2>
        <input type="button" name="selection1" class="selection1 action-button sel" value="Úroveň 1" />
        <input type="button" name="selection2" class="selection2 action-button sel" value="Úroveň 2" />
        <input type="button" name="selection3" class="selection3 action-button sel" value="Úroveň 3" />
        <input type="button" name="previous1" class="previous1 action-button" value="Zpět" />
    </fieldset>
    <fieldset id="menu1">
        <h2 class="fs-title">MENU 1</h2>
        <div id="bubble1"><strong>Úkol:</strong> <br>
        <p>Pootočte obrázek směrem doprava, poté nastavte jeho barvu na černobílou a nakonec zvyšte sytost barev obrázku.</p>


        </div>
        <nav class="nav_ic">
            <ul>
                <li class="first"><a href="#"><img src="Resources/Images/icons/ic_1.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_2.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_3.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_4.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_5.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_6.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_7.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_8.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_9.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_10.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_11.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_12.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_13.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_15.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_16.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_17.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_18.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_19.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_20.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_21.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_23.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_25.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_26.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_28.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_29.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_30.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_31.png"></a></li>
                <li class="last"><a href="#"><img src="Resources/Images/icons/ic_32.png"></a></li>
            </ul>
        </nav>

        <input type="button" name="previous2" class="previous2 action-button" value="Zpět" />
        <input type="submit" name="submit" class="submit action-button" value="Odešli" />
    </fieldset>
    <fieldset id="menu2">
        <h2 class="fs-title">MENU 2</h2>
        <div id="bubble2"><strong>Úkol:</strong> <br>

            Slučte všechny viditelné vrstvy, následne zvětšte obrázek, vyberte nějakou oblast a nastavte ji obrys.

        </div>
        <nav class="nav_cont">
            <ul>
                <li id="home">File
                    <ul>
                        <li>New</li>
                        <li>Open</li>
                        <li>Revert</li>
                        <li class="extendable">Recent files
                            <ul>
                                <li>cat.png</li>
                                <li>dog.png</li>
                                <li>duck.png</li>
                                <li>sheep.png</li>
                            </ul>
                        </li>
                        <li>Save</li>
                        <li>Save as</li>
                        <li>Save in</li>
                        <li>Close</li>
                        <li>Close all</li>
                        <li>Print</li>
                        <li class="extendable">Import Twain
                            <ul>
                                <li>Select source</li>
                                <li>Acquire image</li>
                                <li>Batch acquisition</li>
                            </ul>
                        </li>
                        <li>Image properties</li>
                        <li>Exit</li>
                    </ul>
                </li>
                <li>Edit
                    <ul>
                        <li>Undo</li>
                        <li>Redo</li>
                        <li>Fade</li>
                        <li>Histories</li>
                        <li>Repeat</li>
                        <li>Cut</li>
                        <li>Copy</li>
                        <li>Copy merged</li>
                        <li>Paste</li>
                        <li>Clear</li>
                        <li>Paste as new image</li>
                        <li class="extendable">Paste special
                            <ul>
                                <li>Assemble...</li>
                                <li class="extendable">Paste in
                                    <ul>
                                        <li>Center</li>
                                        <li>Adjust size</li>
                                    </ul>
                                </li>
                                <li>Mark</li>
                                <li>Image with linked mask</li>
                            </ul>
                        </li>
                        <li>Stroke and fill...</li>
                        <li>Optimized clipping...</li>
                        <li>Define pattern</li>
                        <li>Fill with pattern</li>
                        <li class="extendable selected">Purge
                            <ul>
                                <li>Histories</li>
                                <li>Clipboard</li>
                                <li>Pattern</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="extendable selected">Image
                    <ul>
                        <li class="extendable selected">Mode
                            <ul>
                                <li>RGB color</li>
                                <li>Indexed color...</li>
                                <li>RGBA (Alpha channel)</li>
                            </ul>
                        </li>
                        <li>Duplicate</li>
                        <li>Image size</li>
                        <li>Canvas size</li>
                        <li>Fit image</li>

                        <li>Offset...</li>
                        <li>Crop</li>
                        <li>Automatic crop</li>
                        <li>Outsice frame...</li>
                        <li>Outside drop shadow...</li>
                        <li>Transparent color...</li>
                        <li>Automatic transparency</li>
                        <li>Copyright</li>
                    </ul>
                </li>
                <li class="extendable">Layer
                    <ul>
                        <li class="extendable">New
                            <ul>
                                <li>Blank...</li>
                                <li>Color...</li>
                                <li>Adjust...</li>
                                <li>Open as layer...</li>
                                <li>Text...</li>
                            </ul>
                        </li>
                        <li>Duplicate</li>
                        <li>Delete</li>
                        <li>Convert text to image layer</li>
                        <li class="extendable">Insert new background
                            <ul>
                                <li>Blank...</li>
                                <li>Automatic transparency</li>
                            </ul>
                        </li>
                        <li>Transparency</li>
                        <li>Rename layer</li>
                        <li>Options</li>
                        <li>Manual settings...</li>
                        <li>Center layer</li>
                        <li>Redim layer</li>
                        <li>Transform</li>
                        <li>Export layer</li>
                        <li>Order</li>
                        <li>Hide all layers</li>
                        <li>Show all layers</li>
                        <li class="extendable">Merge
                            <ul>
                                <li>Merge shadow</li>
                                <li>Merge with previous layer</li>
                                <li>Merge all visible layers</li>
                                <li>Merge all layers</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="extendable">Selection
                    <ul>
                        <li>Show selection</li>
                        <li>Select all</li>
                        <li>Select layer</li>
                        <li>Invert</li>
                        <li>Center</li>
                        <li>Fit ratio</li>
                        <li>Manual settings</li>
                        <li>Contract</li>
                        <li>Expand</li>
                        <li>Grow</li>
                        <li>Transform</li>
                        <li>Antialiasing</li>
                        <li class="extendable">Options
                            <ul>
                                <li>Bounding box</li>
                                <li>Animate rectangle</li>
                                <li class="extendable">Rounded rectangle
                                    <ul>
                                        <li>Low</li>
                                        <li>Medium</li>
                                        <li>High</li>
                                    </ul>
                                </li>
                                <li class="extendable">Mode
                                    <ul>
                                        <li>Normal</li>
                                        <li>Expand</li>
                                    </ul>
                                </li>
                                <li>Preserve aspect ratio</li>
                            </ul>
                        </li>
                        <li>Copy shape</li>
                        <li>Paste shape</li>
                        <li>Load shape</li>
                        <li>Save shape</li>
                    </ul>
                </li>
                <li class="extendable">Adjust
                    <ul>
                        <li>Custom</li>
                        <li>Brightness</li>
                        <li>Contrast</li>
                        <li>Hue/Saturation</li>
                        <li>Color balance</li>
                        <li>Gamma correct</li>
                        <li>Histogram</li>
                        <li>Levels</li>
                        <li>Auto Levels</li>
                        <li>Auto Contrast</li>
                        <li>More shadows</li>
                        <li>More highlights</li>
                        <li>Replace color</li>
                        <li>Replace color range</li>
                        <li>Duotone</li>
                        <li>Negative</li>
                    </ul>
                </li>
                <li class="extendable">Filter
                    <ul>
                        <li class="extendable">Color
                            <ul>
                                <li>Grayscale</li>
                                <li>Sepia</li>
                                <li>Posterize</li>
                                <li>Swap RGB channel</li>
                                <li>Hue variation</li>
                                <li>Revive colors</li>
                                <li>Tarnish colors</li>
                                <li>Night effect</li>
                                <li>Sunset effect</li>
                                <li class="extendable">Colorize
                                    <ul>
                                        <li>Blue</li>
                                        <li>Green</li>
                                        <li>Red</li>
                                        <li>Purple</li>
                                        <li>Yellow</li>
                                    </ul>
                                </li>
                                <li>Gradient</li>
                                <li>Colored layer</li>
                            </ul>
                        </li>
                        <li>Soften</li>
                        <li>Sharpen</li>
                        <li>Noise</li>
                        <li>Relief</li>
                        <li>Artistic</li>
                        <li>Visual effect</li>
                        <li>Deform</li>
                        <li>Aged effect</li>
                        <li>Frame</li>
                    </ul>
                </li>
                <li class="extendable">View
                    <ul>
                        <li>Filter bar</li>
                        <li>Plug-ins bar</li>
                        <li>Tools palette</li>
                        <li>Layer thumbnail</li>
                        <li>Maximize window when opening</li>
                        <li>Zoom in</li>
                        <li>Zoom out</li>
                        <li>Original size</li>
                        <li>Auto zoom</li>
                        <li>Full screen</li>
                    </ul>
                </li>
                <li class="extendable">Tools
                    <ul>
                        <li>Image explorer</li>
                        <li>Automate/Batch</li>
                        <li class="extendable">Set wallpaper
                            <ul>
                                <li>Center</li>
                                <li>Title</li>
                                <li>Fix to screen</li>
                            </ul>
                        </li>
                        <li>Export as icon</li>
                    </ul>
                </li>
                <li class="extendable">Window
                    <ul>
                        <li>Arrange all</li>
                        <li>Tile horizontal</li>
                        <li>Tile vertical</li>
                        <li>Iconize all</li>
                        <li>Restore all</li>
                    </ul>
                </li>
                <li class="extendable">?
                    <ul>
                        <li>Information</li>
                        <li>Registration</li>
                        <li>About...</li>
                    </ul>
                </li>

            </ul>
            </nav>

        <input type="button" name="previous3" class="previous3 action-button" value="Zpět" />
        <input type="submit" name="submit" class="submit action-button" value="Odešli" />
    </fieldset>
    <fieldset id="menu3">
        <h2 class="fs-title">MENU 3</h2>
        <div id="bubble3"><strong>Úkol:</strong> <br>

            Mírně rozostřete obrázek, poté vyjměte jeho jednu část a vložte do jiného obrázku s tím, že bílá barva - pozadí - bude průhledná.


        </div>
        <nav class="nav_cont">
            <ul>
                <li id="home">File
                    <ul>
                        <li>New</li>
                        <li>Open</li>
                        <li>Revert</li>
                        <li class="extendable">Recent files
                            <ul>
                                <li>cat.png</li>
                                <li>dog.png</li>
                                <li>duck.png</li>
                                <li>sheep.png</li>
                            </ul>
                        </li>
                        <li>Save</li>
                        <li>Save as</li>
                        <li>Save in</li>
                        <li>Close</li>
                        <li>Close all</li>
                        <li>Print</li>
                        <li class="extendable">Import Twain
                            <ul>
                                <li>Select source</li>
                                <li>Acquire image</li>
                                <li>Batch acquisition</li>
                            </ul>
                        </li>
                        <li>Image properties</li>
                        <li>Exit</li>
                    </ul>
                </li>
                <li>Edit
                    <ul>
                        <li>Undo</li>
                        <li>Redo</li>
                        <li>Fade</li>
                        <li>Histories</li>
                        <li>Repeat</li>
                        <li>Cut</li>
                        <li>Copy</li>
                        <li>Copy merged</li>
                        <li>Paste</li>
                        <li>Clear</li>
                        <li>Paste as new image</li>
                        <li class="extendable">Paste special
                            <ul>
                                <li>Assemble...</li>
                                <li class="extendable">Paste in
                                    <ul>
                                        <li>Center</li>
                                        <li>Adjust size</li>
                                    </ul>
                                </li>
                                <li>Mark</li>
                                <li>Image with linked mask</li>
                            </ul>
                        </li>
                        <li>Stroke and fill...</li>
                        <li>Optimized clipping...</li>
                        <li>Define pattern</li>
                        <li>Fill with pattern</li>
                        <li class="extendable selected">Purge
                            <ul>
                                <li>Histories</li>
                                <li>Clipboard</li>
                                <li>Pattern</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="extendable selected">Image
                    <ul>
                        <li class="extendable selected">Mode
                            <ul>
                                <li>RGB color</li>
                                <li>Indexed color...</li>
                                <li>RGBA (Alpha channel)</li>
                            </ul>
                        </li>
                        <li>Duplicate</li>
                        <li>Image size</li>
                        <li>Canvas size</li>
                        <li>Fit image</li>

                        <li>Offset...</li>
                        <li>Crop</li>
                        <li>Automatic crop</li>
                        <li>Outsice frame...</li>
                        <li>Outside drop shadow...</li>
                        <li>Transparent color...</li>
                        <li>Automatic transparency</li>
                        <li>Copyright</li>
                    </ul>
                </li>
                <li class="extendable">Layer
                    <ul>
                        <li class="extendable">New
                            <ul>
                                <li>Blank...</li>
                                <li>Color...</li>
                                <li>Adjust...</li>
                                <li>Open as layer...</li>
                                <li>Text...</li>
                            </ul>
                        </li>
                        <li>Duplicate</li>
                        <li>Delete</li>
                        <li>Convert text to image layer</li>
                        <li class="extendable">Insert new background
                            <ul>
                                <li>Blank...</li>
                                <li>Automatic transparency</li>
                            </ul>
                        </li>
                        <li>Transparency</li>
                        <li>Rename layer</li>
                        <li>Options</li>
                        <li>Manual settings...</li>
                        <li>Center layer</li>
                        <li>Redim layer</li>
                        <li>Transform</li>
                        <li>Export layer</li>
                        <li>Order</li>
                        <li>Hide all layers</li>
                        <li>Show all layers</li>
                        <li class="extendable">Merge
                            <ul>
                                <li>Merge shadow</li>
                                <li>Merge with previous layer</li>
                                <li>Merge all visible layers</li>
                                <li>Merge all layers</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="extendable">Selection
                    <ul>
                        <li>Show selection</li>
                        <li>Select all</li>
                        <li>Select layer</li>
                        <li>Invert</li>
                        <li>Center</li>
                        <li>Fit ratio</li>
                        <li>Manual settings</li>
                        <li>Contract</li>
                        <li>Expand</li>
                        <li>Grow</li>
                        <li>Transform</li>
                        <li>Antialiasing</li>
                        <li class="extendable">Options
                            <ul>
                                <li>Bounding box</li>
                                <li>Animate rectangle</li>
                                <li class="extendable">Rounded rectangle
                                    <ul>
                                        <li>Low</li>
                                        <li>Medium</li>
                                        <li>High</li>
                                    </ul>
                                </li>
                                <li class="extendable">Mode
                                    <ul>
                                        <li>Normal</li>
                                        <li>Expand</li>
                                    </ul>
                                </li>
                                <li>Preserve aspect ratio</li>
                            </ul>
                        </li>
                        <li>Copy shape</li>
                        <li>Paste shape</li>
                        <li>Load shape</li>
                        <li>Save shape</li>
                    </ul>
                </li>
                <li class="extendable">Adjust
                    <ul>
                        <li>Custom</li>
                        <li>Brightness</li>
                        <li>Contrast</li>
                        <li>Hue/Saturation</li>
                        <li>Color balance</li>
                        <li>Gamma correct</li>
                        <li>Histogram</li>
                        <li>Levels</li>
                        <li>Auto Levels</li>
                        <li>Auto Contrast</li>
                        <li>More shadows</li>
                        <li>More highlights</li>
                        <li>Replace color</li>
                        <li>Replace color range</li>
                        <li>Duotone</li>
                        <li>Negative</li>
                    </ul>
                </li>
                <li class="extendable">Filter
                    <ul>
                        <li class="extendable">Color
                            <ul>
                                <li>Grayscale</li>
                                <li>Sepia</li>
                                <li>Posterize</li>
                                <li>Swap RGB channel</li>
                                <li>Hue variation</li>
                                <li>Revive colors</li>
                                <li>Tarnish colors</li>
                                <li>Night effect</li>
                                <li>Sunset effect</li>
                                <li class="extendable">Colorize
                                    <ul>
                                        <li>Blue</li>
                                        <li>Green</li>
                                        <li>Red</li>
                                        <li>Purple</li>
                                        <li>Yellow</li>
                                    </ul>
                                </li>
                                <li>Gradient</li>
                                <li>Colored layer</li>
                            </ul>
                        </li>
                        <li>Soften</li>
                        <li>Sharpen</li>
                        <li>Noise</li>
                        <li>Relief</li>
                        <li>Artistic</li>
                        <li>Visual effect</li>
                        <li>Deform</li>
                        <li>Aged effect</li>
                        <li>Frame</li>
                    </ul>
                </li>
                <li class="extendable">View
                    <ul>
                        <li>Filter bar</li>
                        <li>Plug-ins bar</li>
                        <li>Tools palette</li>
                        <li>Layer thumbnail</li>
                        <li>Maximize window when opening</li>
                        <li>Zoom in</li>
                        <li>Zoom out</li>
                        <li>Original size</li>
                        <li>Auto zoom</li>
                        <li>Full screen</li>
                    </ul>
                </li>
                <li class="extendable">Tools
                    <ul>
                        <li>Image explorer</li>
                        <li>Automate/Batch</li>
                        <li class="extendable">Set wallpaper
                            <ul>
                                <li>Center</li>
                                <li>Title</li>
                                <li>Fix to screen</li>
                            </ul>
                        </li>
                        <li>Export as icon</li>
                    </ul>
                </li>
                <li class="extendable">Window
                    <ul>
                        <li>Arrange all</li>
                        <li>Tile horizontal</li>
                        <li>Tile vertical</li>
                        <li>Iconize all</li>
                        <li>Restore all</li>
                    </ul>
                </li>
                <li class="extendable">?
                    <ul>
                        <li>Information</li>
                        <li>Registration</li>
                        <li>About...</li>
                    </ul>
                </li>

            </ul>
        </nav>

        <nav class="nav_ic double">
            <ul>
                <li class="first"><a href="#"><img src="Resources/Images/icons/ic_1.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_2.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_3.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_4.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_5.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_6.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_7.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_8.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_9.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_10.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_11.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_12.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_13.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_15.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_16.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_17.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_18.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_19.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_20.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_21.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_23.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_25.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_26.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_28.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_29.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_30.png"></a></li>
                <li><a href="#"><img src="Resources/Images/icons/ic_31.png"></a></li>
                <li class="last"><a href="#"><img src="Resources/Images/icons/ic_32.png"></a></li>
            </ul>
        </nav>
        <input type="button" name="previous4" class="previous4 action-button" value="Zpět" />
        <input type="submit" name="submit" class="submit action-button" value="Odešli" />
    </fieldset>
</form>

<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js"></script>
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js"></script>

    <script>
        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next1").click(function(){
            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            $("#progressbar").removeClass("first_step");
            $("#progressbar").addClass("second_step");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50)+"%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'transform': 'scale('+scale+')'});
                    next_fs.css({'left': left, 'opacity': opacity});
                },
                duration: 800,
                complete: function(){
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".selection1").click(function(){
            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            $("#progressbar").removeClass("second_step");
            $("#progressbar").addClass("third_step");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50)+"%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'transform': 'scale('+scale+')'});
                    next_fs.css({'left': left, 'opacity': opacity});
                },
                duration: 800,
                complete: function(){
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".selection2").click(function(){
            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index($(this).parent().next())).addClass("active");
            $("#progressbar").removeClass("second_step");
            $("#progressbar").addClass("third_step");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50)+"%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'transform': 'scale('+scale+')'});
                    next_fs.css({'left': left, 'opacity': opacity});
                },
                duration: 800,
                complete: function(){
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".selection3").click(function(){
            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next().next().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index($(this).parent().next())).addClass("active");
            $("#progressbar").removeClass("second_step");
            $("#progressbar").addClass("third_step");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50)+"%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'transform': 'scale('+scale+')'});
                    next_fs.css({'left': left, 'opacity': opacity});
                },
                duration: 800,
                complete: function(){
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous1").click(function(){
            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            $("#progressbar").removeClass("second_step");
            $("#progressbar").addClass("first_step");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1-now) * 50)+"%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'left': left});
                    previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
                },
                duration: 800,
                complete: function(){
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous2").click(function(){
            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            $("#progressbar").removeClass("third_step");
            $("#progressbar").addClass("second_step");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1-now) * 50)+"%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'left': left});
                    previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
                },
                duration: 800,
                complete: function(){
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous3").click(function(){
            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            $("#progressbar").removeClass("third_step");
            $("#progressbar").addClass("second_step");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1-now) * 50)+"%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'left': left});
                    previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
                },
                duration: 800,
                complete: function(){
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous4").click(function(){
            if(animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev().prev().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            $("#progressbar").removeClass("third_step");
            $("#progressbar").addClass("second_step");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1-now) * 50)+"%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'left': left});
                    previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
                },
                duration: 800,
                complete: function(){
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".submit").click(function(){
            return false;
        })



        NodeList.prototype.forEach = Array.prototype.forEach;

        var lastSubMenu;


        document.addEventListener('click', function(e) {
            var target = e.target;
            console.log(target.localName, target, lastSubMenu, target == lastSubMenu);
            if (target.localName == 'li') {
                if (target == lastSubMenu) {
                    lastSubMenu.classList.remove('open');
                    lastSubMenu = undefined;
                } else if (target.children.length) {
                    var child = target.children[0];
                    //target.children.forEach(function(child) {
                    if (child.localName == 'ul') {
                        lastSubMenu = target;
                        target.classList.add('open');
                    }
                    //})
                } else if (lastSubMenu != undefined) {
                    lastSubMenu.classList.remove('open');
                    lastSubMenu = undefined;
                }
            } else {
                document.querySelectorAll('li.open').forEach(function(child) {
                    child.classList.remove('open');
                })
            }
        })

    </script>

</body>
</html>