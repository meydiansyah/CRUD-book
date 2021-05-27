<?php

namespace App\Controllers;
use App\Models\BooksModel;

class Home extends BaseController
{
	

	public function index()
	{
		$booksModel = new BooksModel();

		$data = [
			'title' => 'Book Store',
			'opened' => 'home',
			'books' => $booksModel->getBooks()
		];

		return view('home', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About | Book Store',
			'opened' => 'about'
		];
		return view('about', $data);
	}

	public function contact()
	{
		$data = [
			'title' => 'Contact Us | Book Store',
			'opened' => 'home',
			'opened' => 'contact'
		];
		return view('contact', $data);
	}

	public function detail($id) {
		$booksModel = new BooksModel();
		$data = [
			'title' => 'About | Book Store',
			'opened' => 'home',
			'books' => $booksModel->getBooks($id)
		];
		return view('edit', $data);
	}

	public function update($id) 
	{
		$booksModel = new BooksModel();

		$booksModel->save([
			'id' => $id,
			'bookname' => $this->request->getVar('bookname'),
			'author' => $this->request->getVar('author')
		]);

		session()->setFlashData('perbarui', 'Data berhasil diperbarui.');

		return redirect()->to('/'); 
	}

	public function save() 
	{
		// dd($this->request->getVar());
		$booksModel = new BooksModel();

		$booksModel->save([
			'bookname' => $this->request->getVar('bookname'),
			'author' => $this->request->getVar('author')
		]);

		session()->setFlashData('pesan', 'Data berhasil ditambahkan');

		return redirect()->to('/'); 

	}

	public function delete($id)
	{
		$booksModel = new BooksModel();
		$booksModel->delete($id);

		return redirect()->to('/');
	}

	
}