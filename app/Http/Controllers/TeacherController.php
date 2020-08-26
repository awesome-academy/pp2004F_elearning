<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\TeacherRepositoryInterface;
class TeacherController extends Controller
{
    private $teacherRepository;

    public function __construct(TeacherRepositoryInterface $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;

    }

    public function index()
    {
        $teachers = $this->teacherRepository->all();
        return view('teachers.index', compact('teachers')) ;
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        // $teacher["name"] = $request->get('name');
        // $teacher["email"] = $request->get('email');
        // $teacher["phone"] = $request->get('phone');
        // $teacher["about"] = $request->get('about');
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $path = $image->getClientOriginalExtension();
        //     $name = time() . "." . $path;
        //     $image->move('images', $name);
        //     $teacher["image"] = $name;
        // }
        // $this->teacherRepository->create($teacher);
        $teacher = $this->teacherRepository->newmodel();
        //dd($teacher);
        $teacher->name = $request->get('name');
        $teacher->email = $request->get('email');
        $teacher->phone = $request->get('phone');
        $teacher->about = $request->get('about');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->getClientOriginalExtension();
            $name = time() . "." . $path;
            $image->move('images', $name);
            $teacher->image = $name;
        }
        //dd($teacher);
        $teacher->save();

        return redirect()->route('teachers-index');
    }

    public function edit($id)
    {
        $teacher = $this->teacherRepository->find($id);
        return view('teachers/edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $teacher = $this->teacherRepository->find($id);
        $teacher->name = $request->get('name');
        $teacher->email = $request->get('email');
        $teacher->phone = $request->get('phone');
        $teacher->about = $request->get('about');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->getClientOriginalExtension();
            $name = time() . "." . $path;
            $image->move('images', $name);
            $teacher->image = $name;
        }
        $teacher->save();
        return redirect('teachers');
    }

    public function delete($id)
    {
        $teacher = $this->teacherRepository->find($id);
        $teacher->delete();
        return redirect('teachers');
    }

}
