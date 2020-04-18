<?php
function biodata($nama, $umur)
{
    // definisi variabel
    $name = $nama;
    $age = $umur;
    $address = "Lubuk Alung , Perumnas Kampung Ladang Sumatera Barat.";
    $hobbies = array("membaca", "design grafis");
    $is_married = false;
    $school = [
        ["name" => "SMKN 1 Sintuk Toboh Gadang", "year_in" => 2016, "year_out" => 2019, "major" => "Rekayasa Perangkat Lunak"],
        ["name" => "null", "year_in" => null, "year_out" => null, "major" => "null"],
    ];
    $skills = [
        ["name" => "HTML", "level" => "beginner"],
        ["name" => "CSS", "level" => "beginner"],
        ["name" => "PHP", "level" => "beginner"]
    ];
    $interest_in_coding = true;

    // gabungkan variabel dalam 1 array
    $data = [
        "name" => $name,
        "age" => $age,
        "address" => $address,
        "hobbies" => $hobbies,
        "is_married" => $is_married,
        "school" => $school,
        "skills" => $skills,
        "interest_in_coding" => $interest_in_coding
    ];

    // ubah array dalam bentuk json
    $json = json_encode($data);

    // tampilkan hasil
    echo $json;
}

// panggil fungsi biodata
biodata("Willy Agustino Efendi", 19);
