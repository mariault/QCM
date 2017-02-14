<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_093603a89f4f711e2a32923b43d6fc3dd94abd739b1fc5c424112fc7e6fbfd9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_fcef210c0b0c2968412b26b71213e6e768fbf436ceaa58f467877e2a31f5f7a5 = $this->env->getExtension("native_profiler");
        $__internal_fcef210c0b0c2968412b26b71213e6e768fbf436ceaa58f467877e2a31f5f7a5->enter($__internal_fcef210c0b0c2968412b26b71213e6e768fbf436ceaa58f467877e2a31f5f7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcef210c0b0c2968412b26b71213e6e768fbf436ceaa58f467877e2a31f5f7a5->leave($__internal_fcef210c0b0c2968412b26b71213e6e768fbf436ceaa58f467877e2a31f5f7a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78a23c99acc37989c8c17e7475ab3db0f5e98acf22ad0108e996ed4243e82508 = $this->env->getExtension("native_profiler");
        $__internal_78a23c99acc37989c8c17e7475ab3db0f5e98acf22ad0108e996ed4243e82508->enter($__internal_78a23c99acc37989c8c17e7475ab3db0f5e98acf22ad0108e996ed4243e82508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_78a23c99acc37989c8c17e7475ab3db0f5e98acf22ad0108e996ed4243e82508->leave($__internal_78a23c99acc37989c8c17e7475ab3db0f5e98acf22ad0108e996ed4243e82508_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "@FOSUser/Group/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
