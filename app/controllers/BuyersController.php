<?php

class BuyersController extends \BaseController {

	/**
	 * Display a listing of buyers
	 *
	 * @return Response
	 */
	public function index()
	{
		$buyers = Buyer::all();

		return View::make('buyers.index', compact('buyers'));
	}

	/**
	 * Show the form for creating a new buyer
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('buyers.create');
	}

	/**
	 * Store a newly created buyer in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Buyer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Buyer::create($data);

		return Redirect::route('buyers.index');
	}

	/**
	 * Display the specified buyer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$buyer = Buyer::findOrFail($id);

		return View::make('buyers.show', compact('buyer'));
	}

	/**
	 * Show the form for editing the specified buyer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$buyer = Buyer::find($id);

		return View::make('buyers.edit', compact('buyer'));
	}

	/**
	 * Update the specified buyer in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$buyer = Buyer::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Buyer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$buyer->update($data);

		return Redirect::route('buyers.index');
	}

	/**
	 * Remove the specified buyer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Buyer::destroy($id);

		return Redirect::route('buyers.index');
	}

}
