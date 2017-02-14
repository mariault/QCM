<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1df4c9409e63decc52e1ea434928b5dc8f5d32777f09e5fec9aa73c712c8ac74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_9d8fb33712c92e5ecf6567611aa08a50878bcbb44badbd890bbd24b6560082b3 = $this->env->getExtension("native_profiler");
        $__internal_9d8fb33712c92e5ecf6567611aa08a50878bcbb44badbd890bbd24b6560082b3->enter($__internal_9d8fb33712c92e5ecf6567611aa08a50878bcbb44badbd890bbd24b6560082b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d8fb33712c92e5ecf6567611aa08a50878bcbb44badbd890bbd24b6560082b3->leave($__internal_9d8fb33712c92e5ecf6567611aa08a50878bcbb44badbd890bbd24b6560082b3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7430c085cf89ab6226918fed87f2c3115687520af3566b2fe5caec1b78d9e23 = $this->env->getExtension("native_profiler");
        $__internal_f7430c085cf89ab6226918fed87f2c3115687520af3566b2fe5caec1b78d9e23->enter($__internal_f7430c085cf89ab6226918fed87f2c3115687520af3566b2fe5caec1b78d9e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f7430c085cf89ab6226918fed87f2c3115687520af3566b2fe5caec1b78d9e23->leave($__internal_f7430c085cf89ab6226918fed87f2c3115687520af3566b2fe5caec1b78d9e23_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "@FOSUser/Registration/register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
