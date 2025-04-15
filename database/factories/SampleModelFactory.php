<?php

namespace ProcessMaker\Package\Accessibility\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use ProcessMaker\Package\Accessibility\Enums\StatusEnum;
use ProcessMaker\Package\Accessibility\Models\AccessibilityRoute;

class SampleModelFactory extends Factory
{
    /**
     * Get the name of the model that is generated by the factory.
     *
     * @return string
     */
    public function modelName()
    {
        return AccessibilityRoute::class;
    }

    /**
     * {@inheritdoc}
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'status' => $this->faker->randomElement([
                StatusEnum::ENABLED,
                StatusEnum::DISABLED,
            ]),
        ];
    }
}
