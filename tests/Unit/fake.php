<?phpnamespace Tests\\Feature;use Illuminate\\Foundation\\Testing\\WithFaker;
use Tests\\TestCase;class PostsTest extends TestCase
{
    use WithFaker;public function a_user_can_create_a_post()
    {
        $attributes = [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
        ];$this->post('posts', $attributes);$this->assertDatabaseHas('posts', $attributes);
    }
}