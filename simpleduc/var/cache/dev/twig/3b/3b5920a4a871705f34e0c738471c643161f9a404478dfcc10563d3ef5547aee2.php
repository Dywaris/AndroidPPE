<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c490f00b111fd34cb2a3bed8a633252f181aad89d737a6882654960cdcc2ffdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5f523b539a115602b6b8d238f3902686744f74ab0799f124e3e4569aeecbe9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f523b539a115602b6b8d238f3902686744f74ab0799f124e3e4569aeecbe9a->enter($__internal_d5f523b539a115602b6b8d238f3902686744f74ab0799f124e3e4569aeecbe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_7fc08c44072127ccf805ba2b951da15d8728fbe6c054f66134b3a8c291b3b7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc08c44072127ccf805ba2b951da15d8728fbe6c054f66134b3a8c291b3b7d0->enter($__internal_7fc08c44072127ccf805ba2b951da15d8728fbe6c054f66134b3a8c291b3b7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d5f523b539a115602b6b8d238f3902686744f74ab0799f124e3e4569aeecbe9a->leave($__internal_d5f523b539a115602b6b8d238f3902686744f74ab0799f124e3e4569aeecbe9a_prof);

        
        $__internal_7fc08c44072127ccf805ba2b951da15d8728fbe6c054f66134b3a8c291b3b7d0->leave($__internal_7fc08c44072127ccf805ba2b951da15d8728fbe6c054f66134b3a8c291b3b7d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
