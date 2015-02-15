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

	

	public function newImage()
	{

			$image = Input::file('image');
	        $filename  = Input::get('product_id') . '_' . Str::random(5) . '.' . $image->getClientOriginalExtension();
	        $newimg = Image::make($image)->resize(null, 700, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/images/products/'.$filename);
	        $newthumb = Image::make($image)->resize(null, 150, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/thumbs/products/'.$filename);
		
		Imager::create(array(
			'product_id' => Input::get('product_id'),
			'name' => $filename,
			'location' => $filename,
			));

		return Redirect::route('product.index');

	}


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
