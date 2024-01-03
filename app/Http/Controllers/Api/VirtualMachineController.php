<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\VirtualMachineResource;
use App\Models\VirtualMachine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VirtualMachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vm = VirtualMachine::all();
        return new VirtualMachineResource(true, 'List Data Virtual Machine', $vm);

    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $virtualMachine = new VirtualMachine();
        $virtualMachine->fill($request->post());
        $virtualMachine->save();

        //return response
        return new VirtualMachineResource(true, 'Data Berhasil Ditambahkan!', $virtualMachine);
    }

    /**
     * Display the specified resource.
     */
    public function show(VirtualMachine $virtualMachine)
    {
        return new VirtualMachineResource(true, 'Data Ditemukan!', $virtualMachine);
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VirtualMachine $virtualMachine)
    {
        
        $virtualMachine->fill($request->post());
        $virtualMachine->update();

        //return response
        return new VirtualMachineResource(true, 'Data Berhasil Diubah!', $virtualMachine);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VirtualMachine $virtualMachine)
    {
         $virtualMachine->delete();
 
         //return response
         return new VirtualMachineResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
