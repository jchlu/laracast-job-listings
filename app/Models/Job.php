<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Arr;

class Job extends Model
{

    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];
    /* public static function all(): array
    {
        return
            [
                ["id" => 1, "title" => "Information Systems Manager", "salary" => "$28613.72"],
                ["id" => 2, "title" => "Junior Executive", "salary" => "$46970.08"],
                ["id" => 3, "title" => "Paralegal", "salary" => "$99957.54"],
                ["id" => 4, "title" => "Software Test Engineer III", "salary" => "$79353.05"],
                ["id" => 5, "title" => "Compensation Analyst", "salary" => "$90113.01"],
                ["id" => 6, "title" => "Quality Engineer", "salary" => "$23661.46"],
                ["id" => 7, "title" => "Operator", "salary" => "$44476.78"],
                ["id" => 8, "title" => "Graphic Designer", "salary" => "$89830.10"],
                ["id" => 9, "title" => "Biostatistician I", "salary" => "$88151.98"],
                ["id" => 10, "title" => "Executive Secretary", "salary" => "$76860.67"],
                ["id" => 11, "title" => "Chemical Engineer", "salary" => "$20401.38"],
                ["id" => 12, "title" => "VP Accounting", "salary" => "$41861.66"],
                ["id" => 13, "title" => "Senior Quality Engineer", "salary" => "$12223.61"],
                ["id" => 14, "title" => "Financial Analyst", "salary" => "$83073.80"],
                ["id" => 15, "title" => "Occupational Therapist", "salary" => "$71895.44"],
                ["id" => 16, "title" => "Senior Cost Accountant", "salary" => "$81274.64"],
                ["id" => 17, "title" => "GIS Technical Architect", "salary" => "$13907.64"],
                ["id" => 18, "title" => "Civil Engineer", "salary" => "$63439.98"],
                ["id" => 19, "title" => "Dental Hygienist", "salary" => "$81561.25"],
                ["id" => 20, "title" => "Desktop Support Technician", "salary" => "$78472.55"],
                ["id" => 21, "title" => "GIS Technical Architect", "salary" => "$59862.17"],
                ["id" => 22, "title" => "Actuary", "salary" => "$53424.25"],
                ["id" => 23, "title" => "Senior Editor", "salary" => "$68988.36"],
                ["id" => 24, "title" => "Clinical Specialist", "salary" => "$19439.17"],
                ["id" => 25, "title" => "Accountant I", "salary" => "$13049.82"],
                ["id" => 26, "title" => "Teacher", "salary" => "$77206.28"],
                ["id" => 27, "title" => "Marketing Assistant", "salary" => "$48956.49"],
                ["id" => 28, "title" => "Programmer IV", "salary" => "$92889.70"],
                ["id" => 29, "title" => "Marketing Manager", "salary" => "$92000.16"],
                ["id" => 30, "title" => "Design Engineer", "salary" => "$90563.33"],
                ["id" => 31, "title" => "Software Engineer IV", "salary" => "$47172.57"],
                ["id" => 32, "title" => "Administrative Assistant III", "salary" => "$34917.59"],
                ["id" => 33, "title" => "Financial Advisor", "salary" => "$98498.38"],
                ["id" => 34, "title" => "Mechanical Systems Engineer", "salary" => "$98206.13"],
                ["id" => 35, "title" => "Sales Associate", "salary" => "$44428.29"],
                ["id" => 36, "title" => "Geological Engineer", "salary" => "$29657.92"],
                ["id" => 37, "title" => "Food Chemist", "salary" => "$26128.00"],
                ["id" => 38, "title" => "Database Administrator III", "salary" => "$93214.82"],
                ["id" => 39, "title" => "Design Engineer", "salary" => "$26437.57"],
                ["id" => 40, "title" => "Junior Executive", "salary" => "$11770.77"],
                ["id" => 41, "title" => "Accounting Assistant II", "salary" => "$89725.46"],
                ["id" => 42, "title" => "Product Engineer", "salary" => "$10189.98"],
                ["id" => 43, "title" => "Junior Executive", "salary" => "$99479.30"],
                ["id" => 44, "title" => "VP Sales", "salary" => "$43250.10"],
                ["id" => 45, "title" => "Chief Design Engineer", "salary" => "$72116.36"],
                ["id" => 46, "title" => "Junior Executive", "salary" => "$26625.84"],
                ["id" => 47, "title" => "Operator", "salary" => "$41398.57"],
                ["id" => 48, "title" => "Web Developer III", "salary" => "$50998.01"],
                ["id" => 49, "title" => "Geological Engineer", "salary" => "$18624.21"],
                ["id" => 50, "title" => "Business Systems Development Analyst", "salary" => "$66299.98"],
                ["id" => 51, "title" => "Tax Accountant", "salary" => "$86201.15"],
                ["id" => 52, "title" => "Web Developer IV", "salary" => "$95638.57"],
                ["id" => 53, "title" => "Geologist III", "salary" => "$36654.95"],
                ["id" => 54, "title" => "Analog Circuit Design manager", "salary" => "$74541.79"],
                ["id" => 55, "title" => "Design Engineer", "salary" => "$27128.93"],
                ["id" => 56, "title" => "Accounting Assistant I", "salary" => "$26981.71"],
                ["id" => 57, "title" => "Civil Engineer", "salary" => "$32105.57"],
                ["id" => 58, "title" => "Assistant Professor", "salary" => "$69985.18"],
                ["id" => 59, "title" => "Structural Engineer", "salary" => "$57043.81"],
                ["id" => 60, "title" => "Account Executive", "salary" => "$41655.59"],
                ["id" => 61, "title" => "Design Engineer", "salary" => "$88192.36"],
                ["id" => 62, "title" => "Executive Secretary", "salary" => "$70899.99"],
                ["id" => 63, "title" => "Health Coach III", "salary" => "$84303.82"],
                ["id" => 64, "title" => "Information Systems Manager", "salary" => "$26950.14"],
                ["id" => 65, "title" => "Accountant III", "salary" => "$92307.96"],
                ["id" => 66, "title" => "Paralegal", "salary" => "$74306.28"],
                ["id" => 67, "title" => "Chemical Engineer", "salary" => "$22552.88"],
                ["id" => 68, "title" => "Account Executive", "salary" => "$20323.67"],
                ["id" => 69, "title" => "Chemical Engineer", "salary" => "$83284.99"],
                ["id" => 70, "title" => "Engineer I", "salary" => "$52384.26"],
                ["id" => 71, "title" => "Sales Associate", "salary" => "$56648.62"],
                ["id" => 72, "title" => "Registered Nurse", "salary" => "$79956.92"],
                ["id" => 73, "title" => "Electrical Engineer", "salary" => "$48568.53"],
                ["id" => 74, "title" => "Junior Executive", "salary" => "$45621.78"],
                ["id" => 75, "title" => "Operator", "salary" => "$64981.49"],
                ["id" => 76, "title" => "Junior Executive", "salary" => "$14345.72"],
                ["id" => 77, "title" => "Account Executive", "salary" => "$29355.57"],
                ["id" => 78, "title" => "VP Marketing", "salary" => "$80344.53"],
                ["id" => 79, "title" => "Social Worker", "salary" => "$66846.34"],
                ["id" => 80, "title" => "Senior Financial Analyst", "salary" => "$14001.71"],
                ["id" => 81, "title" => "Human Resources Manager", "salary" => "$47230.63"],
                ["id" => 82, "title" => "Recruiting Manager", "salary" => "$49575.76"],
                ["id" => 83, "title" => "Staff Scientist", "salary" => "$47188.85"],
                ["id" => 84, "title" => "Senior Sales Associate", "salary" => "$95689.43"],
                ["id" => 85, "title" => "Operator", "salary" => "$41268.26"],
                ["id" => 86, "title" => "Software Consultant", "salary" => "$51921.79"],
                ["id" => 87, "title" => "Structural Engineer", "salary" => "$50729.81"],
                ["id" => 88, "title" => "Environmental Specialist", "salary" => "$63210.95"],
                ["id" => 89, "title" => "Recruiter", "salary" => "$96384.07"],
                ["id" => 90, "title" => "Teacher", "salary" => "$38968.19"],
                ["id" => 91, "title" => "Financial Advisor", "salary" => "$22442.31"],
                ["id" => 92, "title" => "Programmer Analyst II", "salary" => "$84003.19"],
                ["id" => 93, "title" => "Software Test Engineer IV", "salary" => "$69878.76"],
                ["id" => 94, "title" => "Design Engineer", "salary" => "$17075.76"],
                ["id" => 95, "title" => "Clinical Specialist", "salary" => "$65452.56"],
                ["id" => 96, "title" => "Senior Quality Engineer", "salary" => "$89179.58"],
                ["id" => 97, "title" => "Legal Assistant", "salary" => "$63525.48"],
                ["id" => 98, "title" => "VP Marketing", "salary" => "$76471.25"],
                ["id" => 99, "title" => "Senior Sales Associate", "salary" => "$25136.81"],
                ["id" => 100, "title" => "Web Designer III", "salary" => "$17623.89"]
            ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    } */
}
