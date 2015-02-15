<?php

class ProducersController extends \BaseController {

	/**
	 * Display a listing of producers
	 *
	 * @return Response
	 */
	public function index()
	{
		$producers = Producer::all();

		return View::make('producers.index', compact('producers'));
	}

	/**
	 * Show the form for creating a new producer
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('producers.create');
	}

	/**
	 * Store a newly created producer in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		if(Input::file('main_image')){

			$image = Input::file('main_image');
	            $filename  = Input::get('name') . '.' . $image->getClientOriginalExtension();
	            $newimg = Image::make($image)->resize(null, 700, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/images/products/'.$filename);
	            $newthumb = Image::make($image)->resize(null, 150, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/thumbs/products/'.$filename);
		}


		$validator = Validator::make($data = Input::except('main_image'), Producer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Producer::create($data);

		



		return Redirect::route('product.index');
	}

	public function newProductCat()
	{
		$validator = Validator::make($data = Input::all(), ProductCat::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		ProductCat::create($data);

		return Redirect::route('product.create');
	}


	



	/**
	 * Display the specified producer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$producer = Producer::findOrFail($id);

		return View::make('producers.show', compact('producer'));
	}

	/**
	 * Show the form for editing the specified producer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$producer = Producer::find($id);

		return View::make('producers.edit', compact('producer'));
	}

	/**
	 * Update the specified producer in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$producer = Producer::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Producer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$producer->update($data);

		return Redirect::route('producers.index');
	}

	/**
	 * Remove the specified producer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Producer::destroy($id);

		return Redirect::route('producers.index');
	}

}
