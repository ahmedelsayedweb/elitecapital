<?php
namespace cf47\plugin\realtyspace\module\agent;

use cf47\themecore\timber\PostAdapter;

/**
 * Class Entity
 *
 * @package cf47\theme\realtyspace\module\agent
 */
class Entity extends PostAdapter
{
    const FQCN = __CLASS__;

    public function hero_unit()
    {
        return $this->hero_unit;
    }

    public function name()
    {
        return $this->title();
    }

    public function job_title()
    {
        return $this->null_or_string('job_title');
    }

    public function email()
    {
        return $this->null_or_string('email');
    }

    public function main_contact_number()
    {
        $numbers = $this->contact_numbers();

        return array_shift($numbers);
    }

    public function contact_numbers()
    {
        return (array)$this->get_meta_field('contact_numbers');
    }

    public function social_profiles()
    {
        return $this->get_meta_field('social_profiles');
    }

    public function additional_fields()
    {
        return $this->get_meta_field('additional_fields');
    }

    /**
     * @return int
     */
    public function property_count()
    {
        /** @var Repository $agent_repo */
        $agent_repo = cf47rs_get('agent.repo');

        return $agent_repo->get_property_count($this->id());
    }
}
