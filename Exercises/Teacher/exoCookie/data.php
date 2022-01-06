<?php

$products = [
  ["id" => 1, "title" => "The Beatles", "description" => "The Beatles are a British musical group, originally from Liverpool, England. Formed in 1960, and composed of John Lennon, Paul McCartney, George Harrison and Ringo Starr, they are considered the most popular and influential group in rock history.In ten years of existence and only eight years of recording career (from 1962 to 1970), the Beatles have recorded twelve original albums and composed over 200 songs written mostly by the Lennon / McCartney tandem, whose success in the history of the recording industry remains unmatched.", "urlImg" => "Beatles.jpg"],
  ["id" => 2, "title" => "Dire Straits", "description" => "Dire Straits is a British rock group created in Deptford in the summer of 1977 by Mark Knopfler (guitar and vocals), sound Brother David Knopfler (guitar), John Illsley (bass) and Pick Withers (drums). Considered one of the greatest rock groups of the 1980s, Dire Straits has sold over 120 million albums since its debut.", "urlImg" => "Dire_straits.jpg"],
  ["id" => 3, "title" => "Madonna", "description" => "Madonna, by her full name Madonna Louise Ciccone born August 16, 1958 in Bay City, Michigan, is a singer, actress, American dancer, director and businesswoman.", "urlImg" => "Madonna.jpg"],
  ["id" => 4, "title" => "Wolfgang Amadeus Mozart", "description" => "Wolfgang Amadeus Mozart or Johannes Chrysostomus Wolfgangus Theophilus Mozart, born in Salzburg (principality of the Holy Roman Empire) on January 27 17562 and died in Vienna on December 5, 17912, is a composer. Died at the age of thirty-five, he left an impressive work (626 works are listed in the Köchel catalog), which embraces all the musical genres of his time. of his contemporaries, he was, on the piano as on the violin, a virtuoso.", "urlImg" => "Mozart.jpg"],
];

function getById($id, $products){
    foreach ($products as $p){
        if($p['id'] == $id)
            return $p;
    }
}