<?php

class ShoppersController extends \BaseController {

	/**
	 * Display a listing of shoppers
	 *
	 * @return Response
	 */
	public function index()
	{
		$shoppers = Shopper::all();

		return View::make('shoppers.index', compact('shoppers'));
	}

	/**
	 * Show the form for creating a new shopper
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('shoppers.create');
	}

	/**
	 * Store a newly created shopper in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Shopper::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Shopper::create($data);

		return Redirect::route('shoppers.index');
	}

	/**
	 * Display the specified shopper.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$shopper = Shopper::findOrFail($id);

		return View::make('shoppers.show', compact('shopper'));
	}

	/**
	 * Show the form for editing the specified shopper.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$shopper = Shopper::find($id);

		return View::make('shoppers.edit', compact('shopper'));
	}

	/**
	 * Update the specified shopper in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$shopper = Shopper::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Shopper::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$shopper->update($data);

		return Redirect::route('shoppers.index');
	}

	/**
	 * Remove the specified shopper from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Shopper::destroy($id);

		return Redirect::route('shoppers.index');
	}

}
