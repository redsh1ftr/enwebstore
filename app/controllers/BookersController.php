<?php

class BookersController extends \BaseController {

	/**
	 * Display a listing of bookers
	 *
	 * @return Response
	 */
	public function index()
	{
		$bookers = Booker::all();

		return View::make('bookers.index', compact('bookers'));
	}

	/**
	 * Show the form for creating a new booker
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('bookers.create');
	}

	/**
	 * Store a newly created booker in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Booker::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Booker::create($data);

		return Redirect::route('bookers.index');
	}

	/**
	 * Display the specified booker.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$booker = Booker::findOrFail($id);

		return View::make('bookers.show', compact('booker'));
	}

	/**
	 * Show the form for editing the specified booker.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$booker = Booker::find($id);

		return View::make('bookers.edit', compact('booker'));
	}

	/**
	 * Update the specified booker in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$booker = Booker::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Booker::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$booker->update($data);

		return Redirect::route('bookers.index');
	}

	/**
	 * Remove the specified booker from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Booker::destroy($id);

		return Redirect::route('bookers.index');
	}

}
