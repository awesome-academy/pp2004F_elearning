<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\TeacherRepositoryInterface;

class TeacherShowController extends Controller
{
    private $teacherRepository;

    public function __construct(TeacherRepositoryInterface $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    public function show()
    {
        $show = $this->teacherRepository->all();
        return view('teacher', compact('show'));
    }

    public function showDetail($id)
    {
        $details = $this->teacherRepository->find($id);
        return view('teacher-detail', compact('details'));
    }

}
