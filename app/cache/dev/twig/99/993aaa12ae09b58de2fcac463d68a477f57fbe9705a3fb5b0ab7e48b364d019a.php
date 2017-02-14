<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_da9744f7629b11b7ba84ccae630fe5abc7995f7c87a4765bb77714f1e9984835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_2e4f738e146cb2959049929bfd62981fcd4862ff9175c398c2a4f202917db37f = $this->env->getExtension("native_profiler");
        $__internal_2e4f738e146cb2959049929bfd62981fcd4862ff9175c398c2a4f202917db37f->enter($__internal_2e4f738e146cb2959049929bfd62981fcd4862ff9175c398c2a4f202917db37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e4f738e146cb2959049929bfd62981fcd4862ff9175c398c2a4f202917db37f->leave($__internal_2e4f738e146cb2959049929bfd62981fcd4862ff9175c398c2a4f202917db37f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6247c5ca6e2d9764122c33258e4cde90bd43a47f62a2f9c43a35649e58879ae = $this->env->getExtension("native_profiler");
        $__internal_a6247c5ca6e2d9764122c33258e4cde90bd43a47f62a2f9c43a35649e58879ae->enter($__internal_a6247c5ca6e2d9764122c33258e4cde90bd43a47f62a2f9c43a35649e58879ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a6247c5ca6e2d9764122c33258e4cde90bd43a47f62a2f9c43a35649e58879ae->leave($__internal_a6247c5ca6e2d9764122c33258e4cde90bd43a47f62a2f9c43a35649e58879ae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
