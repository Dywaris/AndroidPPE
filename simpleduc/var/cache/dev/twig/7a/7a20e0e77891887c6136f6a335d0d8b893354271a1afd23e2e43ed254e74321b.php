<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_78a0eec6f9811aba14fc40d8c8c5ad9ff46bad7caaa858b51dd9bb006ef3db9c extends Twig_Template
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
        $__internal_c41918a9ea4888439a5974cacf9f6c39e55c5d3a08292b3b9785e18a1af49987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41918a9ea4888439a5974cacf9f6c39e55c5d3a08292b3b9785e18a1af49987->enter($__internal_c41918a9ea4888439a5974cacf9f6c39e55c5d3a08292b3b9785e18a1af49987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_43af51d17e7c034d9e30457331960baeeedd6e6f0782c3b2adabf3d6079817fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43af51d17e7c034d9e30457331960baeeedd6e6f0782c3b2adabf3d6079817fc->enter($__internal_43af51d17e7c034d9e30457331960baeeedd6e6f0782c3b2adabf3d6079817fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c41918a9ea4888439a5974cacf9f6c39e55c5d3a08292b3b9785e18a1af49987->leave($__internal_c41918a9ea4888439a5974cacf9f6c39e55c5d3a08292b3b9785e18a1af49987_prof);

        
        $__internal_43af51d17e7c034d9e30457331960baeeedd6e6f0782c3b2adabf3d6079817fc->leave($__internal_43af51d17e7c034d9e30457331960baeeedd6e6f0782c3b2adabf3d6079817fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
