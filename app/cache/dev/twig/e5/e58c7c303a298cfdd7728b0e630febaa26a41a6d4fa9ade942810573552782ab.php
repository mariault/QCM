<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c6c421404dda2dad3beefd40a58a91bbb6486370b2e1ba02b72ed0ff97d7f7bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_0390636a6ff4c97bb8b05115f4ed9b0dc89e8307e9fc436ec9429b95ada3a295 = $this->env->getExtension("native_profiler");
        $__internal_0390636a6ff4c97bb8b05115f4ed9b0dc89e8307e9fc436ec9429b95ada3a295->enter($__internal_0390636a6ff4c97bb8b05115f4ed9b0dc89e8307e9fc436ec9429b95ada3a295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0390636a6ff4c97bb8b05115f4ed9b0dc89e8307e9fc436ec9429b95ada3a295->leave($__internal_0390636a6ff4c97bb8b05115f4ed9b0dc89e8307e9fc436ec9429b95ada3a295_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5502f61308cf5b025eb9076af4dccfdf150862504d1c5c708ac77d1bffecd710 = $this->env->getExtension("native_profiler");
        $__internal_5502f61308cf5b025eb9076af4dccfdf150862504d1c5c708ac77d1bffecd710->enter($__internal_5502f61308cf5b025eb9076af4dccfdf150862504d1c5c708ac77d1bffecd710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5502f61308cf5b025eb9076af4dccfdf150862504d1c5c708ac77d1bffecd710->leave($__internal_5502f61308cf5b025eb9076af4dccfdf150862504d1c5c708ac77d1bffecd710_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "@FOSUser/Group/new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
