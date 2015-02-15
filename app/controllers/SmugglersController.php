<?php

class SmugglersController extends \BaseController {

	/**
	 * Display a listing of smugglers
	 *
	 * @return Response
	 */
	public function index()
	{
		$smugglers = Smuggler::all();

		return View::make('smugglers.index', compact('smugglers'));
	}

	/**
	 * Show the form for creating a new smuggler
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('smugglers.create');
	}

	/**
	 * Store a newly created smuggler in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Smuggler::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Smuggler::create($data);

		return Redirect::route('smugglers.index');
	}

	/**
	 * Display the specified smuggler.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$smuggler = Smuggler::findOrFail($id);

		return View::make('smugglers.show', compact('smuggler'));
	}

	/**
	 * Show the form for editing the specified smuggler.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$smuggler = Smuggler::find($id);

		return View::make('smugglers.edit', compact('smuggler'));
	}

	/**
	 * Update the specified smuggler in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$smuggler = Smuggler::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Smuggler::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$smuggler->update($data);

		return Redirect::route('smugglers.index');
	}

	/**
	 * Remove the specified smuggler from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Smuggler::destroy($id);

		return Redirect::route('smugglers.index');
	}

}
