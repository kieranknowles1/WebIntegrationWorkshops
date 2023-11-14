<?php

// Written using GitHub Copilot

/*
* Areal values from HadUK-Grid 1km gridded climate data from land surface network
* Source: Met Office National Climate Information Centre
* Monthly, seasonal and annual mean air temperature for UK
* Areal series, starting in 1884
* Last updated 01-Aug-2023 10:44
﻿*
* @source: https://www.metoffice.gov.uk/pub/data/weather/uk/climate/datasets/Tmean/date/UK.txt
*/
function climateData() {
    $year["1884"] = array("jan"=>5.0, "feb" =>4.2, "mar"=>5.1, "apr"=>6.2,"may"=> 9.7, "jun"=>12.5, "jul"=>14.5, "aug"=>15.3, "sep"=>13.0, "oct"=> 8.3, "nov"=>4.6, "dec"=>3.3, "av"=>8.48);
    $year["1885"] = array("jan"=>2.0, "feb" =>4.2, "mar"=>3.5, "apr"=>6.6,"may"=> 7.6, "jun"=>12.3, "jul"=>14.5, "aug"=>12.4, "sep"=>10.9, "oct"=> 6.2, "nov"=>4.8, "dec"=>3.0, "av"=>7.36);
    $year["1886"] = array("jan"=>1.1, "feb" =>0.8, "mar"=>2.9, "apr"=>6.3,"may"=> 8.8, "jun"=>11.9, "jul"=>14.2, "aug"=>14.1, "sep"=>12.0, "oct"=> 9.9, "nov"=>5.7, "dec"=>1.2, "av"=>7.45);
    $year["1887"] = array("jan"=>2.1, "feb" =>3.5, "mar"=>3.3, "apr"=>5.4,"may"=> 8.7, "jun"=>14.3, "jul"=>15.6, "aug"=>14.0, "sep"=>10.6, "oct"=> 6.4, "nov"=>3.9, "dec"=>2.1, "av"=>7.51);
    $year["1888"] = array("jan"=>2.8, "feb" =>1.1, "mar"=>2.1, "apr"=>5.3,"may"=> 9.2, "jun"=>11.8, "jul"=>12.3, "aug"=>12.8, "sep"=>11.2, "oct"=> 7.6, "nov"=>6.5, "dec"=>4.3, "av"=>7.28);
    $year["1889"] = array("jan"=>3.0, "feb" =>2.2, "mar"=>3.8, "apr"=>6.0,"may"=>11.4, "jun"=>14.0, "jul"=>13.6, "aug"=>13.4, "sep"=>11.5, "oct"=> 7.6, "nov"=>6.1, "dec"=>3.1, "av"=>8.02);
    $year["1890"] = array("jan"=>4.8, "feb" =>2.7, "mar"=>5.1, "apr"=>6.2,"may"=>10.5, "jun"=>12.4, "jul"=>13.0, "aug"=>13.1, "sep"=>13.6, "oct"=> 8.9, "nov"=>5.0, "dec"=>0.1, "av"=>7.96);
    $year["1891"] = array("jan"=>1.3, "feb" =>4.4, "mar"=>2.9, "apr"=>5.1,"may"=> 8.2, "jun"=>13.2, "jul"=>13.7, "aug"=>13.0, "sep"=>12.8, "oct"=> 8.4, "nov"=>4.6, "dec"=>3.5, "av"=>7.60);
    $year["1892"] = array("jan"=>1.5, "feb" =>2.5, "mar"=>1.9, "apr"=>6.2,"may"=> 9.9, "jun"=>11.7, "jul"=>12.8, "aug"=>13.6, "sep"=>10.7, "oct"=> 6.0, "nov"=>5.8, "dec"=>1.4, "av"=>7.02);
    $year["1893"] = array("jan"=>1.6, "feb" =>3.6, "mar"=>6.2, "apr"=>8.9,"may"=>11.5, "jun"=>14.1, "jul"=>14.8, "aug"=>15.8, "sep"=>11.6, "oct"=> 8.7, "nov"=>4.1, "dec"=>4.1, "av"=>8.78);
    $year["1894"] = array("jan"=>2.4, "feb" =>3.8, "mar"=>5.6, "apr"=>8.5,"may"=> 7.9, "jun"=>12.3, "jul"=>14.6, "aug"=>13.2, "sep"=>10.6, "oct"=> 8.0, "nov"=>6.9, "dec"=>4.2, "av"=>8.19);
    $year["1895"] = array("jan"=>0.7, "feb" =>2.3, "mar"=>4.2, "apr"=>7.1,"may"=>10.9, "jun"=>13.1, "jul"=>13.7, "aug"=>14.3, "sep"=>14.2, "oct"=> 6.2, "nov"=>6.1, "dec"=>3.0, "av"=>7.55);
    $year["1896"] = array("jan"=>3.9, "feb" =>4.2, "mar"=>5.4, "apr"=>7.9,"may"=>11.0, "jun"=>14.2, "jul"=>14.6, "aug"=>13.0, "sep"=>11.7, "oct"=> 5.9, "nov"=>4.2, "dec"=>3.0, "av"=>8.26);
    $year["1897"] = array("jan"=>0.9, "feb" =>4.5, "mar"=>5.2, "apr"=>5.8,"may"=> 8.6, "jun"=>13.3, "jul"=>14.9, "aug"=>14.9, "sep"=>10.9, "oct"=> 9.1, "nov"=>6.6, "dec"=>3.9, "av"=>8.23);
    $year["1898"] = array("jan"=>5.7, "feb" =>3.6, "mar"=>3.5, "apr"=>7.3,"may"=> 9.1, "jun"=>12.3, "jul"=>13.8, "aug"=>14.7, "sep"=>13.8, "oct"=>10.2, "nov"=>6.0, "dec"=>6.1, "av"=>8.88);
    $year["1899"] = array("jan"=>3.4, "feb" =>4.0, "mar"=>4.2, "apr"=>6.5,"may"=> 8.5, "jun"=>14.0, "jul"=>15.5, "aug"=>16.3, "sep"=>12.0, "oct"=> 8.6, "nov"=>7.8, "dec"=>1.8, "av"=>8.57);
    $year["1900"] = array("jan"=>3.5, "feb" =>1.2, "mar"=>2.7, "apr"=>7.1,"may"=> 9.1, "jun"=>13.2, "jul"=>15.7, "aug"=>13.8, "sep"=>12.4, "oct"=> 8.2, "nov"=>5.9, "dec"=>6.1, "av"=>8.28);
    $year["1901"] = array("jan"=>2.9, "feb" =>1.6, "mar"=>3.4, "apr"=>7.2,"may"=>10.4, "jun"=>12.3, "jul"=>16.3, "aug"=>14.4, "sep"=>12.8, "oct"=> 8.3, "nov"=>4.5, "dec"=>2.5, "av"=>8.08);
    $year["1902"] = array("jan"=>3.6, "feb" =>0.8, "mar"=>5.5, "apr"=>6.5,"may"=> 7.5, "jun"=>12.1, "jul"=>13.0, "aug"=>12.8, "sep"=>11.8, "oct"=> 8.5, "nov"=>6.3, "dec"=>3.8, "av"=>7.73);
    $year["1903"] = array("jan"=>3.0, "feb" =>5.7, "mar"=>5.5, "apr"=>5.4,"may"=> 9.6, "jun"=>11.6, "jul"=>13.6, "aug"=>12.8, "sep"=>11.8, "oct"=> 9.1, "nov"=>5.5, "dec"=>2.5, "av"=>8.02);
    $year["1904"] = array("jan"=>3.4, "feb" =>2.4, "mar"=>3.4, "apr"=>7.5,"may"=> 9.4, "jun"=>12.2, "jul"=>15.1, "aug"=>13.7, "sep"=>11.6, "oct"=> 8.8, "nov"=>4.7, "dec"=>3.5, "av"=>7.99);
    $year["1905"] = array("jan"=>3.4, "feb" =>4.1, "mar"=>5.6, "apr"=>6.0,"may"=> 9.7, "jun"=>13.5, "jul"=>15.6, "aug"=>13.4, "sep"=>11.3, "oct"=> 6.4, "nov"=>4.3, "dec"=>4.7, "av"=>8.19);
    $year["1906"] = array("jan"=>4.3, "feb" =>2.2, "mar"=>3.9, "apr"=>6.1,"may"=> 8.9, "jun"=>12.9, "jul"=>14.1, "aug"=>15.2, "sep"=>12.8, "oct"=> 9.5, "nov"=>6.6, "dec"=>2.5, "av"=>8.29);
    $year["1907"] = array("jan"=>3.0, "feb" =>2.1, "mar"=>5.4, "apr"=>6.5,"may"=> 9.1, "jun"=>11.1, "jul"=>13.0, "aug"=>12.8, "sep"=>12.5, "oct"=> 8.7, "nov"=>5.6, "dec"=>3.8, "av"=>7.83);
    $year["1908"] = array("jan"=>2.2, "feb" =>4.4, "mar"=>3.3, "apr"=>5.0,"may"=>10.9, "jun"=>12.8, "jul"=>14.3, "aug"=>13.3, "sep"=>11.8, "oct"=>11.2, "nov"=>6.6, "dec"=>3.6, "av"=>8.31);
    $year["1909"] = array("jan"=>2.9, "feb" =>2.7, "mar"=>2.5, "apr"=>7.3,"may"=> 9.5, "jun"=>11.0, "jul"=>13.3, "aug"=>14.1, "sep"=>10.9, "oct"=> 9.0, "nov"=>4.0, "dec"=>2.6, "av"=>7.52);
    $year["1910"] = array("jan"=>2.5, "feb" =>3.8, "mar"=>5.2, "apr"=>5.9,"may"=> 9.9, "jun"=>13.1, "jul"=>13.1, "aug"=>14.0, "sep"=>11.6, "oct"=> 9.7, "nov"=>2.7, "dec"=>5.3, "av"=>8.09);
    $year["1911"] = array("jan"=>3.3, "feb" =>3.8, "mar"=>4.2, "apr"=>6.5,"may"=>11.4, "jun"=>13.0, "jul"=>16.0, "aug"=>16.3, "sep"=>12.5, "oct"=> 8.2, "nov"=>5.0, "dec"=>5.1, "av"=>8.81);
    $year["1912"] = array("jan"=>2.8, "feb" =>4.1, "mar"=>6.0, "apr"=>7.8,"may"=>10.4, "jun"=>12.4, "jul"=>14.4, "aug"=>11.7, "sep"=>10.2, "oct"=> 7.5, "nov"=>5.3, "dec"=>5.3, "av"=>8.17);
    $year["1913"] = array("jan"=>3.4, "feb" =>3.9, "mar"=>4.8, "apr"=>6.7,"may"=>10.0, "jun"=>12.7, "jul"=>13.5, "aug"=>14.0, "sep"=>12.6, "oct"=> 9.9, "nov"=>7.2, "dec"=>4.1, "av"=>8.59);
    $year["1914"] = array("jan"=>2.8, "feb" =>5.5, "mar"=>4.8, "apr"=>8.6,"may"=> 9.4, "jun"=>13.1, "jul"=>14.6, "aug"=>14.8, "sep"=>12.2, "oct"=> 9.4, "nov"=>5.8, "dec"=>3.4, "av"=>8.70);
    $year["1915"] = array("jan"=>3.0, "feb" =>3.1, "mar"=>4.2, "apr"=>6.8,"may"=> 9.3, "jun"=>12.8, "jul"=>13.4, "aug"=>14.1, "sep"=>12.2, "oct"=> 8.2, "nov"=>2.6, "dec"=>3.8, "av"=>7.81);
    $year["1916"] = array("jan"=>6.3, "feb" =>2.7, "mar"=>2.4, "apr"=>7.0,"may"=> 9.9, "jun"=>10.6, "jul"=>13.9, "aug"=>14.9, "sep"=>11.9, "oct"=> 9.3, "nov"=>6.0, "dec"=>1.9, "av"=>8.11);
    $year["1917"] = array("jan"=>1.1, "feb" =>1.0, "mar"=>2.4, "apr"=>4.3,"may"=>10.8, "jun"=>13.2, "jul"=>14.6, "aug"=>14.4, "sep"=>12.7, "oct"=> 6.5, "nov"=>6.9, "dec"=>1.9, "av"=>7.52);
    $year["1918"] = array("jan"=>2.6, "feb" =>5.4, "mar"=>4.9, "apr"=>5.9,"may"=>11.3, "jun"=>11.9, "jul"=>14.0, "aug"=>14.6, "sep"=>10.4, "oct"=> 8.3, "nov"=>4.8, "dec"=>5.5, "av"=>8.33);
    $year["1919"] = array("jan"=>2.3, "feb" =>1.1, "mar"=>2.5, "apr"=>6.2,"may"=>11.6, "jun"=>12.5, "jul"=>12.9, "aug"=>14.2, "sep"=>11.6, "oct"=> 7.1, "nov"=>2.3, "dec"=>4.1, "av"=>7.42);
    $year["1920"] = array("jan"=>3.8, "feb" =>5.0, "mar"=>5.8, "apr"=>6.8,"may"=>10.2, "jun"=>12.9, "jul"=>12.9, "aug"=>12.5, "sep"=>11.8, "oct"=> 9.7, "nov"=>6.4, "dec"=>3.4, "av"=>8.45);
    $year["1921"] = array("jan"=>5.8, "feb" =>4.2, "mar"=>5.8, "apr"=>7.3,"may"=>10.0, "jun"=>13.0, "jul"=>16.2, "aug"=>13.8, "sep"=>12.8, "oct"=>11.6, "nov"=>4.4, "dec"=>5.7, "av"=>9.24);
    $year["1922"] = array("jan"=>2.9, "feb" =>3.6, "mar"=>4.0, "apr"=>4.6,"may"=>10.9, "jun"=>12.2, "jul"=>12.3, "aug"=>12.3, "sep"=>11.0, "oct"=> 7.6, "nov"=>5.3, "dec"=>4.8, "av"=>7.63);
    $year["1923"] = array("jan"=>4.9, "feb" =>4.5, "mar"=>5.6, "apr"=>6.3,"may"=> 8.0, "jun"=>11.2, "jul"=>15.6, "aug"=>13.6, "sep"=>11.1, "oct"=> 8.6, "nov"=>2.7, "dec"=>3.0, "av"=>7.97);
    $year["1924"] = array("jan"=>3.8, "feb" =>2.8, "mar"=>3.2, "apr"=>6.0,"may"=> 9.7, "jun"=>12.3, "jul"=>13.9, "aug"=>13.0, "sep"=>11.9, "oct"=> 9.1, "nov"=>6.4, "dec"=>6.0, "av"=>8.19);
    $year["1925"] = array("jan"=>4.6, "feb" =>3.9, "mar"=>4.1, "apr"=>6.3,"may"=>10.1, "jun"=>13.4, "jul"=>15.3, "aug"=>14.2, "sep"=>10.4, "oct"=> 9.4, "nov"=>3.3, "dec"=>2.0, "av"=>8.12);
    $year["1926"] = array("jan"=>3.8, "feb" =>5.5, "mar"=>5.4, "apr"=>8.1,"may"=> 8.9, "jun"=>12.3, "jul"=>15.4, "aug"=>14.9, "sep"=>13.0, "oct"=> 6.9, "nov"=>5.0, "dec"=>3.8, "av"=>8.59);
    $year["1927"] = array("jan"=>3.7, "feb" =>3.7, "mar"=>6.1, "apr"=>6.7,"may"=> 9.4, "jun"=>10.8, "jul"=>14.5, "aug"=>14.4, "sep"=>11.2, "oct"=> 9.3, "nov"=>5.2, "dec"=>1.5, "av"=>8.07);
    $year["1928"] = array("jan"=>4.2, "feb" =>4.8, "mar"=>4.9, "apr"=>7.1,"may"=> 9.6, "jun"=>11.2, "jul"=>14.3, "aug"=>13.9, "sep"=>11.5, "oct"=> 9.0, "nov"=>6.6, "dec"=>3.1, "av"=>8.35);
    $year["1929"] = array("jan"=>1.0, "feb" =>0.3, "mar"=>5.6, "apr"=>5.6,"may"=> 9.9, "jun"=>11.8, "jul"=>14.4, "aug"=>13.8, "sep"=>13.9, "oct"=> 8.4, "nov"=>5.7, "dec"=>4.7, "av"=>7.98);
    $year["1930"] = array("jan"=>4.2, "feb" =>1.7, "mar"=>4.0, "apr"=>7.1,"may"=> 9.5, "jun"=>13.6, "jul"=>14.0, "aug"=>14.3, "sep"=>12.4, "oct"=> 9.3, "nov"=>5.1, "dec"=>3.8, "av"=>8.29);
    $year["1931"] = array("jan"=>2.6, "feb" =>2.9, "mar"=>3.0, "apr"=>6.6,"may"=> 9.9, "jun"=>12.5, "jul"=>14.0, "aug"=>13.1, "sep"=>10.7, "oct"=> 8.1, "nov"=>6.8, "dec"=>5.0, "av"=>7.98);
    $year["1932"] = array("jan"=>5.4, "feb" =>3.1, "mar"=>4.1, "apr"=>5.6,"may"=> 9.1, "jun"=>12.7, "jul"=>14.6, "aug"=>15.4, "sep"=>11.7, "oct"=> 7.7, "nov"=>5.7, "dec"=>4.8, "av"=>8.35);
    $year["1933"] = array("jan"=>1.9, "feb" =>3.2, "mar"=>6.3, "apr"=>7.9,"may"=>10.5, "jun"=>14.0, "jul"=>16.3, "aug"=>15.9, "sep"=>13.6, "oct"=> 9.2, "nov"=>5.0, "dec"=>1.8, "av"=>8.82);
    $year["1934"] = array("jan"=>3.9, "feb" =>3.8, "mar"=>4.0, "apr"=>6.5,"may"=> 9.8, "jun"=>13.4, "jul"=>16.3, "aug"=>13.9, "sep"=>13.0, "oct"=> 9.1, "nov"=>5.3, "dec"=>6.8, "av"=>8.87);
    $year["1935"] = array("jan"=>4.0, "feb" =>4.6, "mar"=>5.7, "apr"=>6.8,"may"=> 9.0, "jun"=>13.2, "jul"=>15.4, "aug"=>15.1, "sep"=>12.1, "oct"=> 8.3, "nov"=>5.6, "dec"=>2.1, "av"=>8.52);
    $year["1936"] = array("jan"=>2.6, "feb" =>1.9, "mar"=>5.8, "apr"=>5.4,"may"=>10.1, "jun"=>13.2, "jul"=>14.1, "aug"=>14.8, "sep"=>13.1, "oct"=> 8.5, "nov"=>4.9, "dec"=>4.5, "av"=>8.26);
    $year["1937"] = array("jan"=>4.2, "feb" =>4.0, "mar"=>2.4, "apr"=>7.9,"may"=>10.7, "jun"=>12.6, "jul"=>14.5, "aug"=>15.2, "sep"=>12.0, "oct"=> 9.2, "nov"=>4.9, "dec"=>2.2, "av"=>8.33);
    $year["1938"] = array("jan"=>4.7, "feb" =>4.1, "mar"=>8.0, "apr"=>6.8,"may"=> 9.3, "jun"=>12.6, "jul"=>13.6, "aug"=>14.5, "sep"=>12.5, "oct"=> 9.3, "nov"=>7.8, "dec"=>3.5, "av"=>8.92);
    $year["1939"] = array("jan"=>3.0, "feb" =>4.8, "mar"=>5.0, "apr"=>7.3,"may"=>10.1, "jun"=>12.9, "jul"=>13.9, "aug"=>15.0, "sep"=>13.0, "oct"=> 7.5, "nov"=>7.2, "dec"=>2.8, "av"=>8.57);
    $year["1940"] = array("jan"=>1.1, "feb" =>2.0, "mar"=>4.8, "apr"=>7.2,"may"=>11.2, "jun"=>14.9, "jul"=>13.6, "aug"=>14.1, "sep"=>11.4, "oct"=> 8.7, "nov"=>5.8, "dec"=>3.3, "av"=>8.01);
    $year["1941"] = array("jan"=>0.2, "feb" =>2.3, "mar"=>3.9, "apr"=>5.5,"may"=> 8.2, "jun"=>13.3, "jul"=>15.4, "aug"=>13.4, "sep"=>13.5, "oct"=> 9.3, "nov"=>5.6, "dec"=>4.9, "av"=>7.96);
    $year["1942"] = array("jan"=>1.0, "feb" =>0.1, "mar"=>4.0, "apr"=>7.8,"may"=> 9.6, "jun"=>12.6, "jul"=>14.0, "aug"=>14.8, "sep"=>12.2, "oct"=> 9.3, "nov"=>4.7, "dec"=>5.7, "av"=>8.03);
    $year["1943"] = array("jan"=>3.9, "feb" =>5.2, "mar"=>5.9, "apr"=>9.1,"may"=>10.3, "jun"=>12.9, "jul"=>14.6, "aug"=>14.0, "sep"=>11.8, "oct"=> 9.8, "nov"=>5.5, "dec"=>3.4, "av"=>8.88);
    $year["1944"] = array("jan"=>5.1, "feb" =>2.9, "mar"=>4.5, "apr"=>8.7,"may"=> 9.8, "jun"=>12.1, "jul"=>14.9, "aug"=>15.4, "sep"=>11.2, "oct"=> 8.2, "nov"=>5.0, "dec"=>3.2, "av"=>8.44);
    $year["1945"] = array("jan"=>0.2, "feb" =>5.9, "mar"=>7.2, "apr"=>8.6,"may"=>10.5, "jun"=>12.9, "jul"=>15.2, "aug"=>14.5, "sep"=>13.1, "oct"=>10.6, "nov"=>6.7, "dec"=>4.5, "av"=>9.13);
    $year["1946"] = array("jan"=>2.5, "feb" =>4.8, "mar"=>4.5, "apr"=>8.5,"may"=> 9.5, "jun"=>11.8, "jul"=>14.5, "aug"=>13.2, "sep"=>12.6, "oct"=> 8.7, "nov"=>6.9, "dec"=>2.6, "av"=>8.35);
    $year["1947"] = array("jan"=>1.7, "feb" =>2.1, "mar"=>2.1, "apr"=>7.2,"may"=>11.4, "jun"=>13.7, "jul"=>15.2, "aug"=>17.0, "sep"=>13.3, "oct"=> 9.9, "nov"=>6.0, "dec"=>4.3, "av"=>8.37);
    $year["1948"] = array("jan"=>3.7, "feb" =>3.8, "mar"=>7.3, "apr"=>7.8,"may"=> 9.9, "jun"=>12.2, "jul"=>14.2, "aug"=>13.5, "sep"=>12.4, "oct"=> 8.9, "nov"=>6.7, "dec"=>4.9, "av"=>8.81);
    $year["1949"] = array("jan"=>4.5, "feb" =>4.8, "mar"=>4.3, "apr"=>8.6,"may"=> 9.7, "jun"=>13.4, "jul"=>15.6, "aug"=>15.2, "sep"=>14.6, "oct"=>10.6, "nov"=>5.9, "dec"=>4.7, "av"=>9.34);
    $year["1950"] = array("jan"=>3.8, "feb" =>4.0, "mar"=>6.5, "apr"=>6.3,"may"=> 9.9, "jun"=>14.3, "jul"=>14.6, "aug"=>14.2, "sep"=>11.6, "oct"=> 8.7, "nov"=>4.7, "dec"=>0.6, "av"=>8.30);
    $year["1951"] = array("jan"=>2.9, "feb" =>2.6, "mar"=>3.2, "apr"=>5.5,"may"=> 8.7, "jun"=>12.2, "jul"=>14.7, "aug"=>13.5, "sep"=>12.8, "oct"=> 9.2, "nov"=>7.2, "dec"=>4.6, "av"=>8.11);
    $year["1952"] = array("jan"=>1.6, "feb" =>2.7, "mar"=>5.5, "apr"=>8.3,"may"=>11.6, "jun"=>12.5, "jul"=>15.0, "aug"=>14.4, "sep"=> 9.9, "oct"=> 8.0, "nov"=>3.4, "dec"=>2.6, "av"=>7.99);
    $year["1953"] = array("jan"=>3.2, "feb" =>3.8, "mar"=>5.1, "apr"=>6.1,"may"=>11.2, "jun"=>12.9, "jul"=>14.1, "aug"=>14.6, "sep"=>12.8, "oct"=> 9.2, "nov"=>7.5, "dec"=>6.0, "av"=>8.91);
    $year["1954"] = array("jan"=>2.6, "feb" =>1.8, "mar"=>4.7, "apr"=>6.7,"may"=>10.1, "jun"=>12.1, "jul"=>12.9, "aug"=>13.2, "sep"=>11.3, "oct"=>10.4, "nov"=>5.9, "dec"=>5.6, "av"=>8.13);
    $year["1955"] = array("jan"=>1.8, "feb" =>0.3, "mar"=>2.6, "apr"=>8.2,"may"=> 8.4, "jun"=>12.3, "jul"=>15.9, "aug"=>16.4, "sep"=>13.1, "oct"=> 8.2, "nov"=>6.5, "dec"=>4.5, "av"=>8.23);
    $year["1956"] = array("jan"=>2.6, "feb" =>0.2, "mar"=>5.2, "apr"=>5.7,"may"=>10.5, "jun"=>11.7, "jul"=>14.2, "aug"=>12.1, "sep"=>12.9, "oct"=> 8.7, "nov"=>5.6, "dec"=>5.2, "av"=>7.90);
    $year["1957"] = array("jan"=>4.5, "feb" =>3.9, "mar"=>7.9, "apr"=>7.6,"may"=> 9.2, "jun"=>13.4, "jul"=>14.7, "aug"=>14.0, "sep"=>11.2, "oct"=> 9.6, "nov"=>5.7, "dec"=>3.8, "av"=>8.84);
    $year["1958"] = array("jan"=>2.5, "feb" =>3.5, "mar"=>2.6, "apr"=>6.4,"may"=> 9.4, "jun"=>12.3, "jul"=>14.4, "aug"=>14.4, "sep"=>13.8, "oct"=> 9.8, "nov"=>5.9, "dec"=>3.7, "av"=>8.25);
    $year["1959"] = array("jan"=>0.9, "feb" =>3.8, "mar"=>6.2, "apr"=>8.0,"may"=>11.2, "jun"=>13.5, "jul"=>15.4, "aug"=>15.7, "sep"=>13.5, "oct"=>11.4, "nov"=>6.2, "dec"=>4.8, "av"=>9.24);
    $year["1960"] = array("jan"=>3.1, "feb" =>2.6, "mar"=>5.3, "apr"=>8.0,"may"=>11.4, "jun"=>14.4, "jul"=>13.8, "aug"=>13.7, "sep"=>11.9, "oct"=> 9.3, "nov"=>6.0, "dec"=>2.9, "av"=>8.54);
    $year["1961"] = array("jan"=>2.7, "feb" =>5.8, "mar"=>7.2, "apr"=>8.4,"may"=> 9.7, "jun"=>12.8, "jul"=>13.6, "aug"=>13.9, "sep"=>13.5, "oct"=> 9.6, "nov"=>5.2, "dec"=>1.6, "av"=>8.67);
    $year["1962"] = array("jan"=>3.5, "feb" =>3.7, "mar"=>1.8, "apr"=>6.5,"may"=> 8.9, "jun"=>12.2, "jul"=>13.2, "aug"=>13.0, "sep"=>11.4, "oct"=> 9.6, "nov"=>4.7, "dec"=>2.0, "av"=>7.56);
    $year["1963"] = array("jan"=>1.9, "feb" =>1.1, "mar"=>4.9, "apr"=>7.2,"may"=> 9.1, "jun"=>13.3, "jul"=>13.5, "aug"=>12.9, "sep"=>11.7, "oct"=> 9.7, "nov"=>6.6, "dec"=>2.3, "av"=>7.40);
    $year["1964"] = array("jan"=>3.2, "feb" =>3.7, "mar"=>3.6, "apr"=>7.5,"may"=>11.5, "jun"=>12.3, "jul"=>14.3, "aug"=>13.8, "sep"=>12.6, "oct"=> 8.0, "nov"=>6.4, "dec"=>2.7, "av"=>8.31);
    $year["1965"] = array("jan"=>2.4, "feb" =>2.6, "mar"=>4.1, "apr"=>6.9,"may"=>10.0, "jun"=>12.8, "jul"=>12.5, "aug"=>13.4, "sep"=>11.2, "oct"=> 9.8, "nov"=>3.6, "dec"=>3.3, "av"=>7.76);
    $year["1966"] = array("jan"=>2.1, "feb" =>4.0, "mar"=>5.6, "apr"=>5.8,"may"=> 9.7, "jun"=>13.8, "jul"=>13.5, "aug"=>13.2, "sep"=>12.7, "oct"=> 8.9, "nov"=>4.5, "dec"=>4.1, "av"=>8.19);
    $year["1967"] = array("jan"=>3.7, "feb" =>4.5, "mar"=>5.8, "apr"=>6.8,"may"=> 8.9, "jun"=>12.7, "jul"=>14.8, "aug"=>14.1, "sep"=>12.4, "oct"=> 9.3, "nov"=>4.8, "dec"=>3.6, "av"=>8.47);
    $year["1968"] = array("jan"=>3.5, "feb" =>1.1, "mar"=>5.2, "apr"=>6.9,"may"=> 8.3, "jun"=>13.2, "jul"=>13.5, "aug"=>14.1, "sep"=>12.5, "oct"=>11.1, "nov"=>5.5, "dec"=>2.6, "av"=>8.16);
    $year["1969"] = array("jan"=>4.4, "feb" =>0.2, "mar"=>2.6, "apr"=>6.3,"may"=> 9.7, "jun"=>12.6, "jul"=>15.1, "aug"=>14.9, "sep"=>12.6, "oct"=>11.7, "nov"=>4.0, "dec"=>2.7, "av"=>8.12);
    $year["1970"] = array("jan"=>2.9, "feb" =>1.8, "mar"=>3.0, "apr"=>5.5,"may"=>11.2, "jun"=>14.6, "jul"=>13.5, "aug"=>14.6, "sep"=>12.9, "oct"=> 9.5, "nov"=>6.3, "dec"=>3.6, "av"=>8.31);
    $year["1971"] = array("jan"=>3.9, "feb" =>4.0, "mar"=>4.4, "apr"=>6.7,"may"=>10.3, "jun"=>11.1, "jul"=>15.1, "aug"=>14.2, "sep"=>13.1, "oct"=>10.3, "nov"=>5.3, "dec"=>6.0, "av"=>8.73);
    $year["1972"] = array("jan"=>3.1, "feb" =>3.4, "mar"=>5.4, "apr"=>7.3,"may"=> 9.4, "jun"=>10.5, "jul"=>14.1, "aug"=>13.5, "sep"=>10.7, "oct"=> 9.6, "nov"=>5.2, "dec"=>4.8, "av"=>8.10);
    $year["1973"] = array("jan"=>3.9, "feb" =>3.4, "mar"=>5.4, "apr"=>5.9,"may"=> 9.8, "jun"=>13.3, "jul"=>14.3, "aug"=>14.9, "sep"=>12.7, "oct"=> 8.2, "nov"=>5.1, "dec"=>4.0, "av"=>8.43);
    $year["1974"] = array("jan"=>5.1, "feb" =>4.5, "mar"=>4.6, "apr"=>7.1,"may"=> 9.7, "jun"=>12.3, "jul"=>13.5, "aug"=>13.7, "sep"=>10.7, "oct"=> 6.9, "nov"=>5.6, "dec"=>6.5, "av"=>8.38);
    $year["1975"] = array("jan"=>5.3, "feb" =>3.8, "mar"=>3.9, "apr"=>7.1,"may"=> 8.6, "jun"=>13.0, "jul"=>15.5, "aug"=>16.7, "sep"=>11.8, "oct"=> 9.2, "nov"=>5.4, "dec"=>4.6, "av"=>8.77);
    $year["1976"] = array("jan"=>4.6, "feb" =>3.8, "mar"=>4.0, "apr"=>7.0,"may"=>10.3, "jun"=>14.9, "jul"=>16.5, "aug"=>15.7, "sep"=>12.0, "oct"=> 9.3, "nov"=>5.2, "dec"=>1.3, "av"=>8.74);
    $year["1977"] = array("jan"=>1.9, "feb" =>3.6, "mar"=>5.8, "apr"=>6.0,"may"=> 9.2, "jun"=>11.2, "jul"=>14.6, "aug"=>13.9, "sep"=>11.7, "oct"=>10.6, "nov"=>5.1, "dec"=>5.1, "av"=>8.27);
    $year["1978"] = array("jan"=>2.3, "feb" =>1.4, "mar"=>5.5, "apr"=>5.5,"may"=>10.4, "jun"=>12.3, "jul"=>13.3, "aug"=>13.7, "sep"=>12.6, "oct"=>10.7, "nov"=>7.3, "dec"=>3.3, "av"=>8.23);
    $year["1979"] = array("jan"=>0.5, "feb" =>0.6, "mar"=>3.4, "apr"=>6.4,"may"=> 8.4, "jun"=>12.7, "jul"=>14.4, "aug"=>13.3, "sep"=>11.9, "oct"=>10.1, "nov"=>5.6, "dec"=>4.4, "av"=>7.59);
    $year["1980"] = array("jan"=>1.7, "feb" =>4.5, "mar"=>3.7, "apr"=>7.7,"may"=>10.0, "jun"=>12.5, "jul"=>13.3, "aug"=>14.4, "sep"=>13.3, "oct"=> 7.8, "nov"=>5.5, "dec"=>4.7, "av"=>8.26);
    $year["1981"] = array("jan"=>3.8, "feb" =>2.5, "mar"=>6.3, "apr"=>6.8,"may"=>10.2, "jun"=>12.0, "jul"=>14.1, "aug"=>14.8, "sep"=>13.1, "oct"=> 6.8, "nov"=>6.5, "dec"=>0.1, "av"=>8.10);
    $year["1982"] = array("jan"=>2.1, "feb" =>4.2, "mar"=>5.0, "apr"=>7.6,"may"=>10.1, "jun"=>13.6, "jul"=>15.1, "aug"=>14.4, "sep"=>12.6, "oct"=> 9.1, "nov"=>6.5, "dec"=>3.4, "av"=>8.66);
    $year["1983"] = array("jan"=>5.4, "feb" =>1.3, "mar"=>5.5, "apr"=>5.5,"may"=> 8.9, "jun"=>12.6, "jul"=>17.1, "aug"=>15.9, "sep"=>12.1, "oct"=> 9.2, "nov"=>6.6, "dec"=>5.0, "av"=>8.83);
    $year["1984"] = array("jan"=>2.3, "feb" =>3.1, "mar"=>3.9, "apr"=>7.2,"may"=> 8.9, "jun"=>13.1, "jul"=>15.2, "aug"=>15.8, "sep"=>12.1, "oct"=> 9.7, "nov"=>6.8, "dec"=>4.6, "av"=>8.57);
    $year["1985"] = array("jan"=>0.4, "feb" =>2.0, "mar"=>3.7, "apr"=>7.2,"may"=> 9.6, "jun"=>11.3, "jul"=>14.5, "aug"=>13.2, "sep"=>12.8, "oct"=> 9.9, "nov"=>3.1, "dec"=>5.1, "av"=>7.78);
    $year["1986"] = array("jan"=>2.5, "feb" =>1.1, "mar"=>4.2, "apr"=>4.8,"may"=> 9.8, "jun"=>13.2, "jul"=>14.2, "aug"=>12.2, "sep"=>10.3, "oct"=> 9.7, "nov"=>6.7, "dec"=>4.8, "av"=>7.67);
    $year["1987"] = array("jan"=>0.7, "feb" =>2.9, "mar"=>3.3, "apr"=>8.7,"may"=> 9.0, "jun"=>11.3, "jul"=>14.5, "aug"=>14.1, "sep"=>12.2, "oct"=> 8.3, "nov"=>5.8, "dec"=>4.8, "av"=>7.99);
    $year["1988"] = array("jan"=>4.1, "feb" =>3.9, "mar"=>5.1, "apr"=>7.1,"may"=>10.5, "jun"=>13.3, "jul"=>13.5, "aug"=>13.9, "sep"=>12.1, "oct"=> 9.4, "nov"=>5.0, "dec"=>6.6, "av"=>8.73);
    $year["1989"] = array("jan"=>5.8, "feb" =>4.9, "mar"=>6.0, "apr"=>5.5,"may"=>11.3, "jun"=>12.9, "jul"=>16.4, "aug"=>14.8, "sep"=>12.9, "oct"=>10.5, "nov"=>5.7, "dec"=>3.6, "av"=>9.23);
    $year["1990"] = array("jan"=>5.5, "feb" =>5.9, "mar"=>7.2, "apr"=>7.0,"may"=>11.2, "jun"=>12.4, "jul"=>15.2, "aug"=>16.1, "sep"=>11.7, "oct"=>10.5, "nov"=>5.8, "dec"=>3.7, "av"=>9.38);
    $year["1991"] = array("jan"=>2.5, "feb" =>1.3, "mar"=>6.6, "apr"=>7.0,"may"=> 9.9, "jun"=>11.0, "jul"=>15.9, "aug"=>15.6, "sep"=>13.1, "oct"=> 9.0, "nov"=>5.7, "dec"=>4.2, "av"=>8.54);
    $year["1992"] = array("jan"=>3.4, "feb" =>4.8, "mar"=>6.1, "apr"=>7.4,"may"=>11.9, "jun"=>14.3, "jul"=>14.7, "aug"=>13.8, "sep"=>11.9, "oct"=> 6.7, "nov"=>6.1, "dec"=>3.1, "av"=>8.69);
    $year["1993"] = array("jan"=>4.7, "feb" =>4.6, "mar"=>5.6, "apr"=>8.2,"may"=>10.0, "jun"=>13.3, "jul"=>13.7, "aug"=>13.1, "sep"=>11.2, "oct"=> 7.3, "nov"=>4.1, "dec"=>3.9, "av"=>8.33);
    $year["1994"] = array("jan"=>4.0, "feb" =>2.4, "mar"=>6.0, "apr"=>6.9,"may"=> 9.3, "jun"=>12.7, "jul"=>16.0, "aug"=>14.3, "sep"=>11.5, "oct"=> 9.0, "nov"=>8.8, "dec"=>5.3, "av"=>8.89);
    $year["1995"] = array("jan"=>3.5, "feb" =>5.0, "mar"=>4.2, "apr"=>7.6,"may"=>10.2, "jun"=>12.9, "jul"=>16.6, "aug"=>17.3, "sep"=>12.4, "oct"=>11.6, "nov"=>6.8, "dec"=>1.6, "av"=>9.17);
    $year["1996"] = array("jan"=>4.0, "feb" =>2.0, "mar"=>3.7, "apr"=>7.5,"may"=> 8.0, "jun"=>12.9, "jul"=>14.7, "aug"=>15.1, "sep"=>12.6, "oct"=>10.4, "nov"=>4.7, "dec"=>2.4, "av"=>8.18);
    $year["1997"] = array("jan"=>2.1, "feb" =>5.3, "mar"=>7.1, "apr"=>7.9,"may"=>10.2, "jun"=>12.6, "jul"=>15.3, "aug"=>17.2, "sep"=>12.7, "oct"=> 9.2, "nov"=>7.7, "dec"=>5.1, "av"=>9.41);
    $year["1998"] = array("jan"=>4.3, "feb" =>6.8, "mar"=>6.7, "apr"=>6.6,"may"=>11.5, "jun"=>12.7, "jul"=>14.1, "aug"=>14.5, "sep"=>13.4, "oct"=> 9.1, "nov"=>5.3, "dec"=>4.9, "av"=>9.16);
    $year["1999"] = array("jan"=>4.5, "feb" =>4.2, "mar"=>6.2, "apr"=>8.3,"may"=>11.5, "jun"=>12.4, "jul"=>15.9, "aug"=>14.8, "sep"=>14.2, "oct"=> 9.8, "nov"=>6.8, "dec"=>3.6, "av"=>9.37);
    $year["2000"] = array("jan"=>4.3, "feb" =>5.1, "mar"=>6.5, "apr"=>6.7,"may"=>10.8, "jun"=>13.2, "jul"=>14.1, "aug"=>15.2, "sep"=>13.5, "oct"=> 9.3, "nov"=>5.8, "dec"=>4.6, "av"=>9.10);
    $year["2001"] = array("jan"=>2.5, "feb" =>3.4, "mar"=>4.0, "apr"=>6.6,"may"=>11.3, "jun"=>12.6, "jul"=>15.2, "aug"=>15.2, "sep"=>12.2, "oct"=>12.2, "nov"=>6.8, "dec"=>3.1, "av"=>8.80);
    $year["2002"] = array("jan"=>5.0, "feb" =>5.5, "mar"=>6.4, "apr"=>8.2,"may"=>10.7, "jun"=>13.1, "jul"=>14.4, "aug"=>15.6, "sep"=>13.1, "oct"=> 8.7, "nov"=>7.5, "dec"=>4.7, "av"=>9.44);
    $year["2003"] = array("jan"=>3.7, "feb" =>3.4, "mar"=>6.7, "apr"=>8.8,"may"=>10.7, "jun"=>14.5, "jul"=>16.2, "aug"=>16.5, "sep"=>13.1, "oct"=> 8.1, "nov"=>7.3, "dec"=>4.2, "av"=>9.47);
    $year["2004"] = array("jan"=>4.4, "feb" =>4.3, "mar"=>5.7, "apr"=>8.5,"may"=>11.0, "jun"=>13.9, "jul"=>14.4, "aug"=>16.1, "sep"=>13.4, "oct"=> 9.3, "nov"=>7.0, "dec"=>5.0, "av"=>9.44);
    $year["2005"] = array("jan"=>5.3, "feb" =>3.7, "mar"=>6.4, "apr"=>7.9,"may"=>10.0, "jun"=>14.1, "jul"=>15.3, "aug"=>14.8, "sep"=>13.8, "oct"=>11.6, "nov"=>5.6, "dec"=>4.1, "av"=>9.42);
    $year["2006"] = array("jan"=>3.8, "feb" =>3.4, "mar"=>3.9, "apr"=>7.4,"may"=>10.7, "jun"=>14.5, "jul"=>17.8, "aug"=>14.9, "sep"=>15.2, "oct"=>11.6, "nov"=>7.2, "dec"=>5.5, "av"=>9.70);
    $year["2007"] = array("jan"=>5.9, "feb" =>5.1, "mar"=>6.3, "apr"=>0.2,"may"=>10.6, "jun"=>13.7, "jul"=>14.2, "aug"=>14.3, "sep"=>12.6, "oct"=>10.2, "nov"=>6.8, "dec"=>4.4, "av"=>9.56);
    $year["2008"] = array("jan"=>5.3, "feb" =>4.9, "mar"=>5.1, "apr"=>7.0,"may"=>12.1, "jun"=>12.9, "jul"=>15.3, "aug"=>15.1, "sep"=>12.5, "oct"=> 8.7, "nov"=>6.1, "dec"=>3.1, "av"=>9.02);
    $year["2009"] = array("jan"=>2.8, "feb" =>3.7, "mar"=>6.1, "apr"=>8.9,"may"=>10.8, "jun"=>13.7, "jul"=>15.1, "aug"=>15.3, "sep"=>13.2, "oct"=>10.4, "nov"=>7.3, "dec"=>2.1, "av"=>9.14);
    $year["2010"] = array("jan"=>0.9, "feb" =>1.8, "mar"=>5.1, "apr"=>7.9,"may"=> 9.7, "jun"=>14.1, "jul"=>15.6, "aug"=>14.2, "sep"=>12.8, "oct"=> 9.4, "nov"=>4.3, "dec"=>0.9, "av"=>7.94);
    $year["2011"] = array("jan"=>3.1, "feb" =>5.3, "mar"=>5.8, "apr"=>0.7,"may"=>11.0, "jun"=>12.6, "jul"=>14.2, "aug"=>14.1, "sep"=>13.8, "oct"=>11.2, "nov"=>8.7, "dec"=>4.8, "av"=>9.61);
    $year["2012"] = array("jan"=>4.6, "feb" =>4.2, "mar"=>7.7, "apr"=>6.3,"may"=>10.5, "jun"=>12.3, "jul"=>14.1, "aug"=>15.3, "sep"=>11.9, "oct"=> 8.2, "nov"=>5.7, "dec"=>3.8, "av"=>8.74);
    $year["2013"] = array("jan"=>3.3, "feb" =>2.7, "mar"=>2.2, "apr"=>6.3,"may"=> 9.5, "jun"=>12.8, "jul"=>17.0, "aug"=>15.6, "sep"=>12.7, "oct"=>11.2, "nov"=>5.5, "dec"=>5.7, "av"=>8.74);
    $year["2014"] = array("jan"=>4.7, "feb" =>5.2, "mar"=>6.7, "apr"=>9.2,"may"=>11.2, "jun"=>14.2, "jul"=>16.3, "aug"=>13.9, "sep"=>13.9, "oct"=>11.0, "nov"=>7.6, "dec"=>4.4, "av"=>9.88);
    $year["2015"] = array("jan"=>3.7, "feb" =>3.5, "mar"=>5.5, "apr"=>7.9,"may"=> 9.5, "jun"=>12.7, "jul"=>14.4, "aug"=>14.7, "sep"=>11.9, "oct"=>10.0, "nov"=>8.1, "dec"=>7.9, "av"=>9.18);
    $year["2016"] = array("jan"=>4.5, "feb" =>3.8, "mar"=>5.3, "apr"=>6.5,"may"=>11.3, "jun"=>13.9, "jul"=>15.3, "aug"=>15.5, "sep"=>14.6, "oct"=> 9.8, "nov"=>4.9, "dec"=>5.9, "av"=>9.29);
    $year["2017"] = array("jan"=>3.8, "feb" =>5.2, "mar"=>7.3, "apr"=>8.0,"may"=>12.1, "jun"=>14.4, "jul"=>15.1, "aug"=>14.5, "sep"=>12.5, "oct"=>11.2, "nov"=>5.7, "dec"=>4.1, "av"=>9.53);
    $year["2018"] = array("jan"=>4.0, "feb" =>2.3, "mar"=>3.8, "apr"=>8.4,"may"=>12.0, "jun"=>14.8, "jul"=>17.2, "aug"=>15.2, "sep"=>12.4, "oct"=> 9.5, "nov"=>7.3, "dec"=>5.8, "av"=>9.45);
    $year["2019"] = array("jan"=>3.4, "feb" =>6.0, "mar"=>6.8, "apr"=>8.4,"may"=>10.0, "jun"=>13.2, "jul"=>16.4, "aug"=>15.8, "sep"=>13.1, "oct"=> 8.9, "nov"=>5.3, "dec"=>5.1, "av"=>9.39);
    $year["2020"] = array("jan"=>5.6, "feb" =>5.1, "mar"=>5.6, "apr"=>9.1,"may"=>11.3, "jun"=>14.0, "jul"=>14.3, "aug"=>15.9, "sep"=>12.8, "oct"=> 9.4, "nov"=>7.7, "dec"=>4.3, "av"=>9.62);
    $year["2021"] = array("jan"=>2.2, "feb" =>4.1, "mar"=>6.4, "apr"=>5.7,"may"=> 9.1, "jun"=>14.2, "jul"=>16.6, "aug"=>15.0, "sep"=>14.7, "oct"=>10.9, "nov"=>7.0, "dec"=>5.3, "av"=>9.28);
    $year["2022"] = array("jan"=>4.7, "feb" =>5.6, "mar"=>6.7, "apr"=>8.1,"may"=> 11.8, "jun"=>13.9, "jul"=>16.5, "aug"=>16.6, "sep"=>13.4, "oct"=>11.6, "nov"=>8.2, "dec"=>2.9, "av"=>10.03);
    $year["2023"] = array("jan"=>4.4, "feb" =>5.8, "mar"=>5.7, "apr"=>7.8,"may"=> 11.6, "jun"=>15.8, "jul"=>14.9, "aug"=>null, "sep"=>null, "oct"=>null, "nov"=>null, "dec"=>null, "av"=>null);

    return $year;
}

/**
 * Helper function to return a JSON encoded error message on failure
 */
function exitError(int $code, string $message) {
    http_response_code($code);
    echo json_encode([
        'error' => $message,
    ]);
    exit;
}

// Set of valid months
$months = [
    "jan" => true,
    "feb" => true,
    "mar" => true,
    "apr" => true,
    "may" => true,
    "jun" => true,
    "jul" => true,
    "aug" => true,
    "sep" => true,
    "oct" => true,
    "nov" => true,
    "dec" => true,
];

header('Content-Type: application/json');

// Only accept GET requests
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    exitError(405, 'Only GET requests are allowed');
}

// Get the year and month parameters from the query string
// Treat an unset parameter as null
$year = $_GET['year'] ?? null;
$month = $_GET['month'] ?? null;

// Check that no other parameters are present
foreach ($_GET as $key => $value) {
    if ($key !== 'year' && $key !== 'month') {
        exitError(400, 'Only the parameters "year" and "month" are allowed');
    }
}

$data = climateData();

// Check that the year is valid
if ($year && (!is_numeric($year) || !array_key_exists($year, $data))) {
    exitError(400, 'The parameter "year" must be a number between 1929 and 2023');
}

// Check that the month is valid
if ($month && !array_key_exists($month, $months)) {
    exitError(400, 'The parameter "month" must be one of: ' . implode(', ', array_keys($months)));
}

/**
 * Get climate data.
 * If $month or $year are not null, data will be filtered to the
 * specified month or year
 * If null is passed, data will be included for all months and/or years
 */
function getFilteredData(?string $year, ?string $month)
{
    // Normally this would use a database, manually filtering the data here instead
    $data = climateData();
    $filtered = [];

    if ($year) {
        $filtered[$year] = $data[$year];
    } else {
        $filtered = $data;
    }

    if ($month) {
        foreach ($filtered as $thisYearKey => $thisYear) {
            $filtered[$thisYearKey] = [
                $month => $thisYear[$month],
            ];
        }
    }

    return $filtered;
}

$filtered = getFilteredData($year, $month);
echo json_encode($filtered);
