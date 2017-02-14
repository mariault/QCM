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
        $__internal_763cb1ab5651d9f873978fdad4e252288891e92518f37d7a0dad6e8b3c5cdfc0 = $this->env->getExtension("native_profiler");
        $__internal_763cb1ab5651d9f873978fdad4e252288891e92518f37d7a0dad6e8b3c5cdfc0->enter($__internal_763cb1ab5651d9f873978fdad4e252288891e92518f37d7a0dad6e8b3c5cdfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_763cb1ab5651d9f873978fdad4e252288891e92518f37d7a0dad6e8b3c5cdfc0->leave($__internal_763cb1ab5651d9f873978fdad4e252288891e92518f37d7a0dad6e8b3c5cdfc0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec51165f5e02278913135291b574a661fd1ef66091d92abf39a5ac173d71bfc5 = $this->env->getExtension("native_profiler");
        $__internal_ec51165f5e02278913135291b574a661fd1ef66091d92abf39a5ac173d71bfc5->enter($__internal_ec51165f5e02278913135291b574a661fd1ef66091d92abf39a5ac173d71bfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ec51165f5e02278913135291b574a661fd1ef66091d92abf39a5ac173d71bfc5->leave($__internal_ec51165f5e02278913135291b574a661fd1ef66091d92abf39a5ac173d71bfc5_prof);

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
