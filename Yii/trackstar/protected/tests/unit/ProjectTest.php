<?php

class ProjectTest extends CDbTestCase {
	
	public $fixtures = array(
		'projects' => 'Project',
	);
	
	public function testCreate() {
	
		/* CREATE A NEW PROJECT */
		$newProject = new Project;
		$newProjectName = 'Test Project 1';
		$newProject->setAttributes(
			array(
				'name' => $newProjectName,
				'description' => 'Test project number one',
				'create_time' => '2013-05-13 00:00:00',
				'create_user_id' => 1,
				'update_time' => '2013-05-13 00:00:00',
				'update_user_id' => 1,
			)
		);
		
		$this->assertTrue($newProject->save(false));	
		
		/* READ BACK THE NEWLY CREATED PROJECT */
		$retrievedProject = Project::model()->findByPk($newProject->id);	
		$this->assertTrue($retrievedProject instanceof Project);
		$this->assertEquals($newProjectName, $retrievedProject->name);
	}
	
	public function testRead() {
		$retrievedProject = $this->projects('project1');
		$this->assertTrue($retrievedProject instanceof Project);
		$this->assertEquals('Test Project 1', $retrievedProject->name);
	}
	
	public function testUpdate() {
		$project = $this->projects('project2');
		$updatedProjectName = 'Updated Test Project 1';
		$project->name = $updatedProjectName;
		$this->assertTrue($project->save(false));
		
		/* read back the record again to ensure the update worked */
		$updatedProject = Project::model()->findByPK($project->id);
		$this->assertTrue($updatedProject instanceof Project);
		$this->assertEquals($updatedProjectName, $updatedProject->name);
	}
	
	public function testDelete() {
		/* DELETE THE PROJECT */
		$project = $this->projects('project2');
		$savedProjectId = $project->id;
		$this->assertTrue($project->delete());
		$deletedProject = Project::model()->findByPk($savedProjectId);
		$this->assertEquals(NULL, $deletedProject);		
	}
	
}

?>