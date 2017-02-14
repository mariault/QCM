<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_f266ffbabbbb293c19d1307f184ad6b11a20f50a4576e5e404c3747565929ceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_6821aaa62a117655a4e6ab75d65e674dd2417eeeee3eb20e9d6aa71fa8c993bd = $this->env->getExtension("native_profiler");
        $__internal_6821aaa62a117655a4e6ab75d65e674dd2417eeeee3eb20e9d6aa71fa8c993bd->enter($__internal_6821aaa62a117655a4e6ab75d65e674dd2417eeeee3eb20e9d6aa71fa8c993bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6821aaa62a117655a4e6ab75d65e674dd2417eeeee3eb20e9d6aa71fa8c993bd->leave($__internal_6821aaa62a117655a4e6ab75d65e674dd2417eeeee3eb20e9d6aa71fa8c993bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf3150ec42b9cb91df1911dd45fa8ae3e696cdb6ddc22e578609978b453d5c58 = $this->env->getExtension("native_profiler");
        $__internal_bf3150ec42b9cb91df1911dd45fa8ae3e696cdb6ddc22e578609978b453d5c58->enter($__internal_bf3150ec42b9cb91df1911dd45fa8ae3e696cdb6ddc22e578609978b453d5c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_bf3150ec42b9cb91df1911dd45fa8ae3e696cdb6ddc22e578609978b453d5c58->leave($__internal_bf3150ec42b9cb91df1911dd45fa8ae3e696cdb6ddc22e578609978b453d5c58_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
