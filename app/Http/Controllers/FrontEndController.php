<?php

namespace App\Http\Controllers;

use Exception;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Client\RequestException;

class FrontEndController extends Controller
{

    public function Index(){
        return Inertia::render('Index/Index');
    }

    public function About(){
        return Inertia::render('Index/AboutPage');
    }

    public function Features(){
        return Inertia::render('Index/FeaturesPage');
    }

    public function Templates(){
        return Inertia::render('Index/TemplatesPage');
    }

    //Action

    public function ChatBox(Request $request){

        $messages = Session::get('chat_messages', []);

        $messages[] = [
            'role' => 'user',
            'content' => $request->usermessage
        ];

        try {

            $AIresponse = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('OPENROUTER_API_KEY'),
            ])->timeout(240)->post('https://openrouter.ai/api/v1/chat/completions', [
                'model' => 'deepseek/deepseek-r1-0528-qwen3-8b:free',
                'messages' => $messages,
            ]);

            $responseData = $AIresponse->json();

            if(is_array($responseData) && array_key_exists('choices', $responseData) && is_array($responseData['choices']) && count($responseData['choices']) > 0 && isset($responseData['choices'][0]['message']['content'])){
                $AIReply = $responseData['choices'][0]['message']['content'];
            }else{
                $AIReply = 'Sorry, I am having trouble responding right now. Please try again later.';
            }

        } catch (Exception $e) {
            $AIReply = 'Network issue: Please check your internet connection.';
        }

        $messages[] = [
            'role' => 'chatbot',
            'content' => $AIReply
        ];

        Session::put('chat_messages', $messages);

        return back();
    }


    //Templates
    public function Template_1(){
        return Inertia::render('Index/Template1',[
            'MessageProps' => Session::get('chat_messages', [])
        ]);
    }

    public function Template_2(){
        return Inertia::render('Index/Template2',[
            'MessageProps' => Session::get('chat_messages', [])
        ]);
    }

    public function Template_3(){
        return Inertia::render('Index/Template3', [
            'MessageProps' => Session::get('chat_messages', [])
        ]);
    }

    public function Template_4(){
        return Inertia::render('Index/Template4', [
            'MessageProps' => Session::get('chat_messages', [])
        ]);
    }

    public function Template_5(){
        return Inertia::render('Index/Template5', [
            'MessageProps' => Session::get('chat_messages', [])
        ]);
    }

    public function Template_6(){
        return Inertia::render('Index/Template6', [
            'MessageProps' => Session::get('chat_messages', [])
        ]);
    }

    public function Template_7(){
        return Inertia::render('Index/Template7', [
            'MessageProps' => Session::get('chat_messages', [])
        ]);
    }

    public function Template_8(){
        return Inertia::render('Index/Template8', [
            'MessageProps' => Session::get('chat_messages', [])
        ]);
    }

    public function Template_9(){
        return Inertia::render('Index/Template9', [
            'MessageProps' => Session::get('chat_messages', [])
        ]);
    }
}
