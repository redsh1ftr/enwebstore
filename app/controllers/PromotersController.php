<?php

class PromotersController extends \BaseController {

	/**
	 * Display a listing of promoters
	 *
	 * @return Response
	 */
	public function index()
	{
		$promoters = Promoter::all();

		return View::make('promoters.index', compact('promoters'));
	}

	/**
	 * Show the form for creating a new promoter
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('promoters.create');
	}

	/**
	 * Store a newly created promoter in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Promoter::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Promoter::create($data);

		return Redirect::route('promoters.index');
	}

	/**
	 * Display the specified promoter.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$promoter = Promoter::findOrFail($id);

		return View::make('promoters.show', compact('promoter'));
	}

	/**
	 * Show the form for editing the specified promoter.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$promoter = Promoter::find($id);

		return View::make('promoters.edit', compact('promoter'));
	}

	/**
	 * Update the specified promoter in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$promoter = Promoter::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Promoter::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$promoter->update($data);

		return Redirect::route('promoters.index');
	}

	/**
	 * Remove the specified promoter from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Promoter::destroy($id);

		return Redirect::route('promoters.index');
	}

}
