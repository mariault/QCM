<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_969584249b61827b20c86378cba9956d37d499551f692ff391d7a64cf6c51dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6a5fb1a09d618163add854d8494eb1b8eee2aec0c72b7d28d418caee3563078 = $this->env->getExtension("native_profiler");
        $__internal_a6a5fb1a09d618163add854d8494eb1b8eee2aec0c72b7d28d418caee3563078->enter($__internal_a6a5fb1a09d618163add854d8494eb1b8eee2aec0c72b7d28d418caee3563078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6a5fb1a09d618163add854d8494eb1b8eee2aec0c72b7d28d418caee3563078->leave($__internal_a6a5fb1a09d618163add854d8494eb1b8eee2aec0c72b7d28d418caee3563078_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87a128e9f9cc40cfc871ea2fb7bf5e80f666cf91ac34e08d90d0ff70bdd8017f = $this->env->getExtension("native_profiler");
        $__internal_87a128e9f9cc40cfc871ea2fb7bf5e80f666cf91ac34e08d90d0ff70bdd8017f->enter($__internal_87a128e9f9cc40cfc871ea2fb7bf5e80f666cf91ac34e08d90d0ff70bdd8017f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_87a128e9f9cc40cfc871ea2fb7bf5e80f666cf91ac34e08d90d0ff70bdd8017f->leave($__internal_87a128e9f9cc40cfc871ea2fb7bf5e80f666cf91ac34e08d90d0ff70bdd8017f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Resetting/reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
