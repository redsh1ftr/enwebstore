<?php

class PaintersController extends \BaseController {

	/**
	 * Display a listing of painters
	 *
	 * @return Response
	 */
	public function index()
	{
		$painters = Painter::all();

		return View::make('painters.index', compact('painters'));
	}

	/**
	 * Show the form for creating a new painter
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('painters.create');
	}

	/**
	 * Store a newly created painter in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Painter::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Painter::create($data);

		return Redirect::route('painters.index');
	}

	/**
	 * Display the specified painter.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$painter = Painter::findOrFail($id);

		return View::make('painters.show', compact('painter'));
	}

	/**
	 * Show the form for editing the specified painter.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$painter = Painter::find($id);

		return View::make('painters.edit', compact('painter'));
	}

	/**
	 * Update the specified painter in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$painter = Painter::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Painter::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$painter->update($data);

		return Redirect::route('painters.index');
	}

	/**
	 * Remove the specified painter from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Painter::destroy($id);

		return Redirect::route('painters.index');
	}

}
