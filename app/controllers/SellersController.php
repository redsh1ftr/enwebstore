<?php

class SellersController extends \BaseController {

	/**
	 * Display a listing of sellers
	 *
	 * @return Response
	 */
	public function index()
	{
		$sellers = Seller::all();

		return View::make('sellers.index', compact('sellers'));
	}

	/**
	 * Show the form for creating a new seller
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sellers.create');
	}

	/**
	 * Store a newly created seller in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Seller::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Seller::create($data);

		return Redirect::route('sellers.index');
	}

	/**
	 * Display the specified seller.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$seller = Seller::findOrFail($id);

		return View::make('sellers.show', compact('seller'));
	}

	/**
	 * Show the form for editing the specified seller.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$seller = Seller::find($id);

		return View::make('sellers.edit', compact('seller'));
	}

	/**
	 * Update the specified seller in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$seller = Seller::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Seller::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$seller->update($data);

		return Redirect::route('sellers.index');
	}

	/**
	 * Remove the specified seller from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Seller::destroy($id);

		return Redirect::route('sellers.index');
	}

}
