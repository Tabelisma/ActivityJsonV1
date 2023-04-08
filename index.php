<?php
    header('Access-Control-Allow-Origin: *');
    // root
    $bikes = new stdClass();
    $bikes->bike = array(
        [ 
            "Pics" => ["trek1.jpg", "trek2.jpg", "trek3.jpg", "trek4.jpg", "trek5.jpg", "trek6.jpg"],
            "Units" => "Mountain Bikes",
            "Brands" => "Trek",
            "Model" => "Trek marlin 8",
            "Specifications" => array(
                    "Upkit" => "Sram Series Upkit",
                    "Breakset" => "Shimano Mt200",
                    "Fork" => "RockShox Judy Silver",
                    "WheelSet" => "Bontrager Kove",
                    "Cockpit" => "Bontrager Alloy",
                    "Crank" => "Sram Series",
                )
        ],
        //Next brand
        [
            "Pics" => ["Bianchi1.png", "Bianchi2.jpg", "Bianchi3.jpg", "Bianchi4.jpg", "Bianchi5.jpg"],
            "Units" => "Road Bikes",
            "Brands" => "Bianchi",
            "Model" => "Bianchi OltreXr4",
            "Specifications" =>
                array(
                    "Upkit" => "Ultegra R8100 Series Upkit",
                    "Breakset" => "Ultegra R8100 Series Breakset",
                    "WheelSet" => "Fulcrum Racing 400 disc brake, 622x19c, 2 WAY FIT tubeless ready",
                    "Stem" => "Reparto Corse by Vision Metron 5D ACR Disc Integrated Aero bar, Bar/stem Integrated, material UD Weave Carbon, drop 125mm, reach 80mm, Di2 compatible, RC'21 graphics, Ext: 100x400mm-47/50cm, 110x420mm-53/55cm, 120x420mm-57/59cm, 130x440mm-61cm.",
                    "Handlebars" => "Handlebarks include the Stem",
                    "Saddle" => "Saddle is Fi'zi:k Argo Vento R3, nylon carbon reinforced shell w/WingFlex, K:ium rails, 260x140mm",
                ),
        ],
        //Next Brand
        [
            "Pics" => ["bmx1.jpg", "bm2.jpg", "bmx3.jpg", "bmx4.jpg", "bmx5.jpg"],
            "Units" => "Bmx",
            "Brands" => "Mongoose",
            "Model" => "Legion L500",
            "Specifications" => array(
                    "Frameset" => "Ultegra R8100 Series UpkitFrame is tapered headtube, removable brake mounts, and mid BB shell.",
                    "Breakset" => "Breaks Dia-Compe 990",
                    "Chain" => "Chain Half link Series.",
                    "SizeOfChain" => "Size chain 1/2 x1/8 | Compatibility : All single speed drivetrains",
                    "Tire" => "Tires 20” x 2.4” tires mounted on wide aluminum double wall 36H rims with 3/8” female axle front hub and 9T cog sealed bearing freecoaster rear hub.",
                    "Drivetrain" => "Drivetrain features 175 mm two-piece tubular chromoly hollow spindle cranks with a 25T aluminum chainring and mid sealed bearing bottom bracket.",
                ),
    
            ],
        //Next Brand
        [ 
            "Pics" => ["fixed1.jpg", "fixed2.jpg", "fixed3.jpg", "fixed4.jpg", "fixed5.jpg"],
            "Units" => "Fixie",
            "Brands" => "Tsunami",
            "Model" => "Tsunami SNM100",
            "Specifications" =>
                array(
                    "Frame" => "Frame Alumium alloy T6061.",
                    "Headset" => "Headset IS 41mm / 28.6mm.",
                    "Tire" => "Tire clearance Up to 700 x 25c",
                    "Weight" => "Weight Frame- 1550g (Size M), Fork- 650g.",
                    "Hub" => "Hubs Front QR 100mm, Rear 120mm/ Stainless Steel Removable Plates.",
                    "Sizes" => "Sizes: S(49cm.), M(52cm.), L(55cm.), XL(58cm.)",
                ),
    
        ],
        //Next Brand
        [ 
            "Pics" => ["fat1.jpg", "fat2.png", "fat3.png"],
            "Units" => "Fat bike",
            "Brands" => "Specialized",
            "Model" => "Specialized Fatboy",
            "Specifications" => 
                array(
                    "Frame" => "Frame fully butted w/ Smooth Welds, tapered head tube and seat tube, forged post-mount 160mm disc dropouts, internal routing, forged bottom bracket shell, 197x12mm rear thru-axle.",
                    "Upkit" => "Sram Series Upkit.",
                    "Breaks" => "Breaks Sram Series",
                    "Handlebars" => "Handle bars double-butted alloy, 9-degree backsweep, 5-degree upsweep, 15mm rise, 750mm width, 31.8mm.",
                    "Stem" => "Stem 3D-forged alloy, 4-bolt, 7-degree rise.",
                    "Grips" => "Grips half-waffle, S/M: regular thickness, L/XL: XL thickness.",
                ),
        ],
        //Next Brand
        [ 
            "Pics" => ["gravel1.png","gravel2.png", "gravel3.png", "gravel4.png", "gravel5.png", ],
            "Units" => "Gravel Bikes",
            "Brands" => "Specialized",
            "Model" => "Specialized Diverge",
            "Specifications" => 
                array(
                    "Frame" => "Frames Specialized Diverge FACT 8r carbon, Future Shock suspension, threaded BB, internal routing, 12x142mm thru-axle, flat-mount disc.",
                    "Wheelset" => "Wheelset Pathfinder Sport, 700x38mm",
                    "Rear_Derailleur" => "SRAM Apex 1, long cage, 11-speed RD.",
                    "Handlebars" => "SRAM Apex 1, long cage, 11-speed RD.",
                    "Cassette" => "Cassette Sunrace, 11-speed, alloy spider, 11-42t",
                    "Handlebars" => "Handle bars Specialized Adventure Gear Hover, 103mm drop x 70mm reach x 12º flare.",
                ),
        ],
    );

    $data = json_encode($bikes);
    echo $data;
    
?>
