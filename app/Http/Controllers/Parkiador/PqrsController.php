public function index()
{
    \$cases = auth()->user()->pqrs()->latest()->paginate(10);
    return view('parkidor.pqrs.index', compact('cases'));
}

public function create()
{
    return view('parkidor.pqrs.create');
}

public function store(StorePqrsRequest \$request)
{
    \$data = \$request->validated();
    \$data['user_id'] = auth()->id();
    if (\$file = \$request->file('attachment')) {
        \$data['attachment'] = \$file->store('pqrs');
    }
    Pqrs::create(\$data);
    return redirect()->route('parkidor.pqrs.index')->with('status','PQRS enviada');
}

// show, edit, update, destroy similares según tu UX

