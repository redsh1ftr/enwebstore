<?php

class ImagersController extends \BaseController {

	/**
	 * Display a listing of imagers
	 *
	 * @return Response
	 */
	public function index()
	{
		$imagers = Imager::all();

		return View::make('imagers.index', compact('imagers'));
	}

	/**
	 * Show the form for creating a new imager
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('imagers.create');
	}

	/**
	 * Store a newly created imager in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Imager::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Imager::create($data);

		return Redirect::route('imagers.index');
	}

	/**
	 * Display the specified imager.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$imager = Imager::findOrFail($id);

		return View::make('imagers.show', compact('imager'));
	}

	/**
	 * Show the form for editing the specified imager.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$imager = Imager::find($id);

		return View::make('imagers.edit', compact('imager'));
	}

	/**
	 * Update the specified imager in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$imager = Imager::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Imager::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$imager->update($data);

		return Redirect::route('imagers.index');
	}

	/**
	 * Remove the specified imager from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Imager::destroy($id);

		return Redirect::route('imagers.index');
	}

}
