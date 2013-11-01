<?php

class LabInfoTableSeeder extends Seeder {

	public function run()
	{
       
		$labDatas = [
            [
                "name" => "Rice",
                "sciName" => "Oryza sativa L",
                "percGerm" => "80",
                "percPurity" => "98"
            ],
            [
                "name" => "Sorghum",
                "sciName" => "Sorghum vulgare Pers",
                "percGerm" => "75",
                "percPurity" => "96"
            ],
            [
                "name" => "Corn",
                "sciName" => "Zea mays L",
                "percGerm" => "75",
                "percPurity" => "98"
            ],            
            [
                "name" => "Mungbean",
                "sciName" => "Vigna radiata (L.) Wilczek",
                "percGerm" => "75",
                "percPurity" => "98"
            ],
            [
                "name" => "Black gram",
                "sciName" => "Vigna mungo (L) Hepper",
                "percGerm" => "75",
                "percPurity" => "98"
            ],
            [
                "name" => "Soybean",
                "sciName" => "Glycine max (L) Merr",
                "percGerm" => "65",
                "percPurity" => "97"
            ],
            [
                "name" => "Cotton",
                "sciName" => "Gossypium spp",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Sweet Corn",
                "sciName" => "Zea mays L. var.saccharata Bailrey",
                "percGerm" => "60",
                "percPurity" => "96"
            ],
            [
                "name" => "Chinese kale",
                "sciName" => "Brassica alboglabra Bailey",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Cucumber",
                "sciName" => "Cucumis sativus L.",
                "percGerm" => "75",
                "percPurity" => "98"
            ],
            [
                "name" => "Garden pea",
                "sciName" => "Pisum sativum L.",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Chinese cabbage",
                "sciName" => "Brassica pekinensis(lour.) Rupr.",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Chinese mustard",
                "sciName" => "Brassica juncea Coss.",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Chinese radish",
                "sciName" => "Raphanus sativus L.",
                "percGerm" => "75",
                "percPurity" => "96"
            ],
            [
                "name" => "Chinese convolvulus",
                "sciName" => "Ipomoea aquatica Forsk.",
                "percGerm" => "50",
                "percPurity" => "94"
            ],
            [
                "name" => "Papper",
                "sciName" => "Capsicum spp.",
                "percGerm" => "55",
                "percPurity" => "97"
            ],
            [
                "name" => "Tomato",
                "sciName" => "Lycopersicon esculentum Mill.",
                "percGerm" => "65",
                "percPurity" => "98"
            ],
            [
                "name" => "Yard long bean",
                "sciName" => "Vigna unguiculata (L.) Walp.",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Cabbage",
                "sciName" => "Brassica oleracea L.var.capitata(L.) Alef",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Cauliflower",
                "sciName" => "Brassica oleracea L.var.botrytis L.",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Broccoli",
                "sciName" => "Brassica oleracea L.var.italica Plenck",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Edible rape",
                "sciName" => "Brassica chinensis L.",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Lerttuce",
                "sciName" => "Lactuca sativa L.",
                "percGerm" => "65",
                "percPurity" => "95"
            ],
            [
                "name" => "Onion",
                "sciName" => "Alliun cepa L.",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Watermelon",
                "sciName" => "Citrullus lanatus Schrad.",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Leek",
                "sciName" => "Allium porrum L.",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Coriander",
                "sciName" => "Coriandrum sativum L.",
                "percGerm" => "60",
                "percPurity" => "98"
            ],
            [
                "name" => "Sunflower",
                "sciName" => "Helianthus annus L.",
                "percGerm" => "75",
                "percPurity" => "98"
            ],
            [
                "name" => "Bitter gourd",
                "sciName" => "Momordica charantia L.",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Wax gourd",
                "sciName" => "Benincasa hispida (Thunb.)(Cogn)",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Eggplant",
                "sciName" => "Solanum melongena L.vas.esculentum",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Round Eggplant",
                "sciName" => "Solanum melongena L.",
                "percGerm" => "70",
                "percPurity" => "98"
            ],
            [
                "name" => "Okra",
                "sciName" => "Abelmoschus esculentus(l.) Moench",
                "percGerm" => "75",
                "percPurity" => "98"
            ],
            [
                "name" => "Pumpkin",
                "sciName" => "Cucurbita moschata Duchesne ex Poir",
                "percGerm" => "75",
                "percPurity" => "98"
            ],
            [
                "name" => "Ridpe gourd, Luffa",
                "sciName" => "Luffa acutangula (L.) Roxb.",
                "percGerm" => "75",
                "percPurity" => "98"
            ],
            [
                "name" => "Cantaloupe",
                "sciName" => "Cucumis melo L.var.cantalupensis Naudin",
                "percGerm" => "75",
                "percPurity" => "98"
            ],
            [
                "name" => "Oil Palm",
                "sciName" => "Elaeis guineensis Jacq.",
                "percGerm" => "0",
                "percPurity" => "0"
            ]
        ];
        foreach ($labDatas as $labData)
        {
            Lab::create($labData);
        }
	}

}