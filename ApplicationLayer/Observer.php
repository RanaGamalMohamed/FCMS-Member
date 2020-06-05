<?php 


interface Observer
{
	public function update();
}

interface Subject
{
	public function addObserver(Observer $newObserver);
	public function deleteObserver(Observer $removedObserver);
	public function notify();

}  



?>