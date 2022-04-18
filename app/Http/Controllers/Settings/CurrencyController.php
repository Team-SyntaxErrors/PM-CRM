<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\CurrencyFormRequest;
use App\Models\Currency;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CurrencyController extends Controller
{

    public function index(Request $request)
    {
        \dd('dd');
    }

    public function create()
    {
    }

    public function store(CurrencyFormRequest $request, Currency $currency)
    {
        try {
            $currency->fill($request->all())->save();

            return response()->json([
                'message' => 'Currency stored successfully',
                'data' => $currency,
                'status' => Response::HTTP_CREATED,
            ], Response::HTTP_CREATED);
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'line' => $exception->getLine(),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function edit(Currency $currency)
    {
        try {
            return response()->json([
                'message' => 'Fetch Currency detail successfully',
                'data' => $currency,
                'status' => Response::HTTP_OK,
            ], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'line' => $exception->getLine(),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function update(CurrencyFormRequest $request, Currency $currency)
    {
        try {
            $currency->fill($request->all())->save();

            return response()->json([
                'message' => 'Currency stored successfully',
                'data' => $currency,
                'status' => Response::HTTP_CREATED,
            ], Response::HTTP_CREATED);
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'line' => $exception->getLine(),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy(Currency $currency)
    {
        try {
            $currency->delete();

            return response()->json([
                'message' => 'Currency deleted successfully',
                'data' => $currency,
                'status' => Response::HTTP_NO_CONTENT,
            ], Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'line' => $exception->getLine(),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
