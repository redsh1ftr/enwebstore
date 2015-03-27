<?php

class ShoppersController extends \BaseController {

	/**
	 * Display a listing of shoppers
	 *
	 * @return Response
	 */
	public function PayMent()
	{
				// Set your secret key: remember to change this to your live secret key in production
				// See your keys here https://dashboard.stripe.com/account/apikeys
				Stripe::setApiKey("sk_test_6Xjx7CIZfR3MqgsQKNsVF1vf");

				// Get the credit card details submitted by the form
				$token = Input::get('stripeToken');

		// Create the charge on Stripe's servers - this will charge the user's card
		try {
		$charge = Stripe_Charge::create(array(
		  "amount" => Input::get('data-description'), // amount in cents, again
		  "currency" => "usd",
		  "source" => $token,
		  "description" => "payinguser@example.com")
		);
	} catch(\Stripe\Error\Card $e) {
	  // The card has been declined
	}

		return View::make('shoppers.createPaymentForm');
	}

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
